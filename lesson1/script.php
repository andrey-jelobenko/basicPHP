<?php

// скрипт опроса о важных делах, запланированных на день

$questionTask = "Какая задача стоит перед вами сегодня? ";
$questionDuration = "Сколько примерно времени эта задача займет? ";

$name = readline("Привет, как вас зовут? ");
$age = (int)readline("Сколько вам лет? ");

$task1 = readline($questionTask);
$duration1 = (int)readline($questionDuration);
$task2 = readline($questionTask);
$duration2 = (int)readline($questionDuration);
$task3 = readline($questionTask);
$duration3 = (int)readline($questionDuration);

$totalDuration = $duration1 + $duration2 + $duration3;

echo "
{$name}, вам {$age} лет, и сегодня у вас запланировано 3 приоритетных задачи на день:
- {$task1} ({$duration1}ч)
- {$task2} ({$duration2}ч)
- {$task3} ({$duration3}ч)
Примерное время выполнения плана = {$totalDuration}ч
";