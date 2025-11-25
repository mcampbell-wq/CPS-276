<?php

require_once 'Classes/StickyForm.php';

$stickyTest = new StickyForm;

$stickierTest = $stickyTest->renderInput('test', 'test');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sticky Form</title>
</head>

<body class="container">

    <p></p>
    <form action="" method="post">

        <div class="row">
            <div class="col">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" class="form-control" required>
            </div>
            <div class="col">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" class="form-control" required>
            </div>
            <p></p>
        </div>

        <div class="row">
            <div class="col">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" required>
            </div>
            <div class="col">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" class="form-control" required>
            </div>
            <div class="col">
                <label for="passwordConfirm">Confirm Password</label>
                <input type="text" id="passwordConfirm" name="passwordConfirm" class="form-control" required>
            </div>
            <p></p>
        </div>

        <input type="submit" class="btn btn-primary" value="Register">
    </form>


</body>

</html>