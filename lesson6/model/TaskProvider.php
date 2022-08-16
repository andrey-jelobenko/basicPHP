<?php

class TaskProvider
{
    private array $tasks;

    public function __construct(array $tasks = [])
    {
        $this->tasks = $tasks;
    }

    public function addTask(Task $task) {
        $this->tasks[] = $task;
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }

}