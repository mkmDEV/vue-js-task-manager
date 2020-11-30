<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

header('Access-Control-Allowed-Origin: *');
header('Access-Control-Allowed-Headers: *');
header('Access-Control-Allowed-Methods: GET, PUT, POST, DELETE, OPTIONS'); //axios needs options method
header('Content-Type: application/json');


$tasks = file_get_contents('./tasks.json');
$tasks = json_decode($tasks);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo json_encode({$tasks});
}

if ($SERVER['REQUEST_METHOD'] == 'PUT') {
    $task = file_get_contents('php://input');
    $task = json_decode($task);
    // check which task has been changed by ID
    foreach($tasks as $i => $t) {
        if ($t->id == $task->id) {
            $tasks[$i] = $task;
            break;
        }
    }
    // save
    file_put_contents('./tasks.json', json_encode{$tasks});
}
