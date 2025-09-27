<?php
$name = 'No Name Sent';
if (isset($_GET['name'])) {
    $name = "The name is {$_GET['name']}";
}
