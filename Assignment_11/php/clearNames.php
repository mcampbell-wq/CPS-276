<?php

header('Content-Type: application/json');

require_once __DIR__ . '/../classes/Pdo_methods.php';
$pdo = new PdoMethods();

$sql = "TRUNCATE TABLE names";
$res = $pdo->otherNotBinded($sql);

if ($res === 'error') {
    echo json_encode([
        'masterstatus' => 'error',
        'msg'          => 'Failed to clear the name list.'
    ]);
} else {
    echo json_encode([
        'masterstatus' => 'success',
        'msg'          => 'All names have been removed.'
    ]);
}
