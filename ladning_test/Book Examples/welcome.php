<?php
$name = 'No Name Sent';
if (isset($_GET['name'])) {
    $name = "The name is {$_GET['name']}";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">
    <h1>Welcome Page</h1>
    <p><?php echo htmlspecialchars($name); ?></p>
</body>

</html>