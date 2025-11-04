<?php
require_once 'Classes/Date_time.php';
$dt = new Date_time();
$notes = $dt->getNotes();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Display Notes</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>


<body>
    <div class="container">
        <h1>Display Notes</h1>
        <p>
            <a href="index.php">Add Note</a>
        </p>
        <form action="display_notes.php" method="post">
            <div class="form-group">
                <label for="begDate">Beginning Date</label>
                <input type="date" class="form-control" id="begDate" name="begDate">
            </div>

            <div class="form-group">
                <label for="endDate">Ending Date</label>
                <input type="date" class="form-control" id="endDate" name="endDate">
            </div>

            <div class="form-group">
                <input type="submit" name="getNotes" class="btn btn-primary" value="Get Notes">
            </div>
        </form>
    </div>

    <?php echo $notes ?>

</body>

</html>