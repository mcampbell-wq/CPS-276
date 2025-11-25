<?php

header('Content-Type: application/json');

require_once __DIR__ . '/../classes/Pdo_methods.php';
$pdo = new PdoMethods();

$sql = "SELECT fullname FROM names ORDER BY fullname ASC";
$records = $pdo->selectNotBinded($sql);

if ($records === 'error') {
    echo json_encode([
        'masterstatus' => 'error',
        'msg'          => 'Could not fetch names.',
        'names'        => ''
    ]);
    exit;
}

if (!($records > 0)) {
    echo json_encode([
        'masterstatus' => 'error',
        'msg'          => 'Could not fetch names.',
        'names'        => ''
    ]);
    exit;
}

if (empty($records)) {
    $html = '<p>No names to display</p>';
} else {
    $items = '';
    foreach ($records as $r) {
        $safe = htmlspecialchars($r['fullname'], ENT_QUOTES, 'UTF-8');
        $items .= "<p>{$safe}</p>";
    }
    $html = "{$items}";
}

echo json_encode([
    'masterstatus' => 'success',
    'msg'          => '',
    'names'        => $html
]);
