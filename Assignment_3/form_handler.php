<?php
$add = $_POST["addName"] ?? "";
if ($add) {
    echo "Name Added";
} else {
    echo "no name added";
}
