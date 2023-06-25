<?php
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET' && isset($_GET['endpoint']) && $_GET['endpoint'] === 'kurwa') {
    $response = array('message' => 'Hello, World!');
    echo json_encode($response);
} else {
    http_response_code(404);
    $response = array('error' => 'Not found');
    echo json_encode($response);
}
?>