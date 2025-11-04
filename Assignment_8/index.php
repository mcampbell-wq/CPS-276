<?php
require_once 'Classes/Date_time.php';
$dt = new Date_time();
$notes = $dt->checkSubmit();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Add Note</title>
</head>

<body class="container">
    <h1>Add Note</h1>
    <form action="" method="post">
        <p><a href='display_notes.php'>Display Notes</a>
        <p>
        <p>Date and Time
        <p>
            <input type="datetime-local" class="form-control" id="dataTime" name="dateTime">
        <p>Note
            <textarea style="height: 500px;" class="form-control"
                id="fileContent" name="fileContent"></textarea>
        </p>
        <p>
            <input type="submit" value="Add Note" class="btn btn-primary">
    </form>
</body>

</html>