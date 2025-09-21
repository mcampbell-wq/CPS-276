<?php
$testDoc = <<<HTML
<form>
        <label for="email address">Email Address:</label>
        <input type="text" id="email address" name="email address" class="form-control" placeholder="name@example.com">
        
        <label for="example">Example Text Area:</label>
        <textarea id="example" name="example" rows="4" cols="50" class="form-control"></textarea>
    </form>
HTML;
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
        <?php echo $testDoc ?>
    </main>
</body>

</html>