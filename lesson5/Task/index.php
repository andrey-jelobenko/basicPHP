<?php

require_once "Comment.php";
require_once "User.php";
require_once "Task.php";
require_once "TaskService.php";

$user = new User('Пользователь 1', 'none@none.com');
$task = new Task($user, 'Задача первая', 6);

TaskService::addComment($user, $task, 'Первый комментарий');
TaskService::addComment($user, $task, 'Второй комментарий');

echo "Комментарии:" . PHP_EOL;

foreach ($task->getComments() as $comment) {
    echo "задача: " . $comment->getTask()->getDescription() . ", ";
    echo "комментарий: " . $comment->getText() . PHP_EOL;
}