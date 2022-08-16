<?php

include_once 'model/Task.php';
include_once 'model/TaskProvider.php';

session_start();

if (isset($_REQUEST['description'])) {
    $task = new Task($_REQUEST['description']);
    $tasks = new TaskProvider($_SESSION['tasks']);
    $tasks->addTask($task);
    $_SESSION['tasks'] = $tasks->getTasks();
    header('Location: ?controller=tasks');
    die();
}

if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete') {
    unset($_SESSION['tasks'][$_REQUEST['key']]);
    header('Location: ?controller=tasks');
    die();
}

require_once 'view/tasks.php';