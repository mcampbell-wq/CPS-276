<!-- beginning of PHP code -->
<?php
$numbers = range(1, 50);
$first = true;

$evenNumbers = "Even Numbers: ";
foreach ($numbers as $number) {     /*alternate if statements*/
    if ($number % 2 == 0) {
        if (!$first) {
            $evenNumbers .= " - ";
        }
        $evenNumbers .= $number;
        $first = false;
    }
}


/* benefits of herdocs */
$form = <<<HTML
<p>
<form>
        <label for="email address">Email Address:</label>
        <input type="text" id="email address" name="email address" class="form-control" placeholder="name@example.com">
        <p></p>
        <label for="example">Example Text Area:</label>
        <textarea id="example" name="example" rows="4" cols="50" class="form-control"></textarea>
    </form>
<p>
HTML;

function createTable($rows, $cols)
{
    $table = '<table class="table table-bordered">';
    $row = "<tr>";
    $cellOpen = "<td>";
    $cellClose = "</td>";

    $rowCount = 1;

    while ($rowCount <= $rows) {    /*row loop*/

        $colCount = 1;

        while ($colCount <= $cols) {    /*column loop*/

            $table .= $cellOpen;
            $table .= "Row $rowCount, Col $colCount";
            $table .= $cellClose;
            $colCount++;
        }

        $table .= $row; /*concatenation example*/
        $rowCount++;
    }


    return $table;
}
?>
<!-- end of PHP code -->

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
        <?php
        echo $evenNumbers;
        echo $form;
        echo createTable(8, 6);
        ?>
    </main>
</body>

</html>