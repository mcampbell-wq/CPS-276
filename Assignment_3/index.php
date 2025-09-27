<?php
$output = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'processNames.php';
    $output = clearAddNames();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Name List</title>
</head>

<body class="container">
    <main>
        <h1>Add Names</h1>
        <p></p>
        <form action="index.php" method="post">
            <div>
                <input type="submit" value="Add Name" class="btn btn-primary">
                <input type="submit" name="clearNames" value="Clear Names" class="btn btn-primary">
            </div>

            <div>
                <label for="Enter Name">Enter Name</label>
                <input type="text" id="enter Name" name="addName" class="form-control">
            </div>

            <div>
                <label for="List of Names">List of Names</label>
                <textarea style="height: 500px;" class="form-control"
                    id="namelist" name="namelist"><?php echo $output ?></textarea>
            </div>
        </form>
    </main>
</body>

</html>