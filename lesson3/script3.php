<?php

/*
Подготовьте многомерный ассоциативный массив следующего вида:
$students = [
'ИТ20' => [
'Иванов Иван' => 5,
'Кириллов Кирилл' => 3
],
'БАП20' => [
'Антонов Антон' => 4
]
];
В качестве ключей массива используются названия групп. В качестве элементов — отношение
студента и его оценки. Добавьте произвольные имена студентов и их оценки в обе группы.
После подготовки массива, реализуйте скрипт командной строки, выполняющий следующие
вычисления:
*/

$students = [
    'БАП1320' => [ // В качестве ключей будут названия групп
        'Смирнова Христина Потаповна' => 5,
        'Рогозин Даниил Арсениевич' => 3,
        'Золин Владилен Леонтиевич' => 4,
        'Архаткина Владислава Никитевна' => 5,
        'Мещерякова Мария Елизаровна' => 2,
        'Саврасова Фаина Ивановна' => 3,
        'Хромченко Зинаида Николаевна' => 5,
        'Протасова Майя Леонидовна' => 4,
    ],
    'ИТ1720' => [
        'Ябров Тимур Чеславович' => 4,
        'Белорусов Ефрем Изяславович' => 5,
        'Ягода Назар Прохорович' => 5,
        'Ярилова Розалия Серафимовна' => 3,
        'Нырко Платон Вадимович' => 5,
        'Калинин Агап Моисеевич' => 2,
        'Никифоров Юлиан Прокофиевич' => 2
    ]
];

/*
a) Вычислить арифметическое среднее по всем оценкам в рамках группы. Вывести на
экран название группы с самым большим вычисленным значением успеваемости;
*/

foreach ($students as $group => $studentList) {
    $average[$group] = array_sum($studentList) / count($studentList);
}

$maxAverage = max($average);

foreach ($average as $key => $value) {
    if ($value == $maxAverage) $bestGroup = $key;
}

echo "Лучшая группа {$bestGroup} со средним баллом " . number_format($maxAverage, 2) . PHP_EOL;

/*
b) Составить список на отчисление, в который попадают студенты из любой группы,
имеющие оценку ниже трёх. В списке студенты должны быть сгруппированы по их
группе. Выведите полученные данные в консоль, с помощью функции print_r
*/

$grades = 3;
foreach ($students as $group => $studentList) {
    foreach ($studentList as $name => $estimation) {
        if($estimation < $grades) $exclusion[$group][] = $name;
    }
}

print_r($exclusion);