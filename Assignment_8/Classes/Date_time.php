<?php


require_once __DIR__ . '/pdo_methods.php';

class Date_time
{

    private $pdoHelper;

    public function __construct()
    {
        $this->pdoHelper = new PdoMethods();
    }

    public function checkSubmit(): string
    {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['fileContent'])) {
            return '';
        }

        $dateTimeRaw = trim($_POST['dateTime'] ?? '');
        $noteRaw     = trim($_POST['fileContent'] ?? '');


        if ($dateTimeRaw === '' || $noteRaw === '') {
            return $this->alert(
                'danger',
                'Please enter a date, time, and note.'
            );
        }

        $timestamp = strtotime($dateTimeRaw);
        if ($timestamp === false) {
            return $this->alert(
                'danger',
                'Invalid date/time format.'
            );
        }

        $sql = 'INSERT INTO note (date_time, note) VALUES (:dt, :txt)';

        $bindings = [
            [':dt',  $timestamp, 'int'],
            [':txt', $noteRaw,   'str']
        ];

        $result = $this->pdoHelper->otherBinded($sql, $bindings);

        if ($result === 'noerror') {
            return $this->alert('success', 'Note added successfully!');
        }

        return $this->alert(
            'danger',
            'Failed to save the note. Please try again.'
        );
    }

    public function getNotes(): string
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['getNotes'])) {
            return '';
        }

        $begRaw = trim($_POST['begDate'] ?? '');
        $endRaw = trim($_POST['endDate'] ?? '');

        if ($begRaw === '' || $endRaw === '') {
            return $this->alert(
                'danger',
                'No notes found for the date range selected.'
            );
        }

        $begTs = strtotime($begRaw . ' 00:00:00');
        $endTs = strtotime($endRaw . ' 23:59:59');

        if ($begTs === false || $endTs === false) {
            return $this->alert(
                'danger',
                'Invalid date format.'
            );
        }

        if ($begTs > $endTs) {
            [$begTs, $endTs] = [$endTs, $begTs];
        }

        $sql = <<<SQL
            SELECT date_time, note
            FROM note
            WHERE date_time BETWEEN :begDate AND :endDate
            ORDER BY date_time DESC
SQL;

        $bindings = [
            [':begDate', $begTs, 'int'],
            [':endDate', $endTs, 'int']
        ];

        $rows = $this->pdoHelper->selectBinded($sql, $bindings);

        if ($rows === 'error' || $rows === false) {
            return $this->alert(
                'danger',
                'Something went wrong while retrieving notes.'
            );
        }

        if (empty($rows)) {
            return $this->alert(
                'info',
                'No notes found for the selected date range.'
            );
        }

        $html = '<table class="table table-striped">';
        $html .= '<thead><tr>'
            . '<th>Date &amp; Time</th>'
            . '<th>Note</th>'
            . '</tr></thead><tbody>';

        foreach ($rows as $row) {
            $readable = date('m/d/Y h:i A', $row['date_time']);
            $noteEsc  = htmlspecialchars(
                $row['note'],
                ENT_QUOTES | ENT_SUBSTITUTE,
                'UTF-8'
            );

            $html .= "<tr>"
                . "<td>{$readable}</td>"
                . "<td>{$noteEsc}</td>"
                . "</tr>";
        }

        $html .= '</tbody></table>';
        return $html;
    }

    private function alert(string $type, string $message): string
    {
        return "<div class=\"alert alert-{$type}\" role=\"alert\">{$message}</div>";
    }
}
