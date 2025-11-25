<?php

declare(strict_types=1);
ini_set('display_errors', 0);
error_reporting(0);
header('Content-Type: application/json');

$rawInput = file_get_contents('php://input');
$payload  = json_decode($rawInput, true);

if (empty($payload['name']) || !is_string($payload['name'])) {
    echo json_encode([
        'masterstatus' => 'error',
        'msg'          => 'Please provide a non-empty name.'
    ]);
    exit;
}

$trimmed = trim($payload['name']);
$parts   = preg_split('/\s+/', $trimmed);

if (count($parts) < 2) {
    $formatted = $trimmed;
} else {
    $firstLower = array_shift($parts);
    $lastLower  = implode(' ', $parts);
    $first = ucwords($firstLower);
    $last = ucwords($lastLower);
    $formatted = $last . ', ' . $first;
}

require_once __DIR__ . '/../classes/Pdo_methods.php';
$pdo = new PdoMethods();

$sql = "INSERT INTO names (fullname) VALUES (:fullname)";
$bindings = [
    [':fullname', $formatted, 'str']
];

$insertResult = $pdo->otherBinded($sql, $bindings);

if ($insertResult === 'error') {
    echo json_encode([
        'masterstatus' => 'error',
        'msg'          => 'Database error could not add the name.'
    ]);
    exit;
}

echo json_encode([
    'masterstatus' => 'success',
    'msg'          => 'Name added successfully.'
]);
