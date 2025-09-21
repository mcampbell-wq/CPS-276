<?php
function createTable($rows, $cols)
{
    $table = '<table class="table table-bordered">';
    $row = "<tr>";
    $rowClose = "</tr>";
    $cellOpen = "<td>";
    $cellClose = "</td>";

    $rowCount = 1;

    while ($rowCount <= $rows) {

        $colCount = 1;

        while ($colCount <= $cols) {

            $table .= $cellOpen;
            $table .= "Row $rowCount, Col $colCount";
            $table .= $cellClose;
            $colCount++;
        }

        $table .= $row;
        $rowCount++;
    }


    return $table;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Basics</title>
</head>

<body class="container">
    <main>
        <p> test </p>
        <p>
            <?php echo createTable(6, 8) ?>
        </p>
    </main>
</body>

</html>