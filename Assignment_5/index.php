<?php
$result = "";
$link = "";
require_once 'classes/Directories.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $output = new Director();

    $bigCall = $output->CreateFile();

    if ($bigCall) {
        $result .= "$bigCall";
        $result .= "<p>";

        $link = "";
    } else {

        $result .= "File and directory were created.";
        $result .= "<p>";

        $nav = $output->ProvidePath();

        $link = "<a href='{$nav}/readme.txt'>Path where the file is located.</a>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>File Directory</title>
</head>

<body class="container">
    <h1>File and Directory Assignment</h1>
    <main>
        <p>Enter a folder name and the contents of a file. Folder names should contain alpha numeric characters only.
        <p>
            <?php
            echo $result;
            echo $link;
            ?>

        <form action="index.php" method="post">
            <div>
                <label for="Folder Name">Folder Name</label>
                <input type="text" id="folder Name" name="folderName" class="form-control">
            </div>
            <p>
            <div>
                <label for="File Content">File Content</label>
                <textarea style="height: 500px;" class="form-control"
                    id="fileContent" name="fileContent"></textarea>
            </div>
            <p>
            <div>
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>

</html>