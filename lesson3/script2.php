<?php

/*
Разработайте скрипт для запуска из командной строки, генерирующий персонализированные
поздравления с днём рождения. Подготовьте два массива: в первом храните пожелания
(счастья, здоровья и т.д.), во втором эпитеты (бесконечного, крепкого и т.д.). При запуске
запросите имя именинника и после ввода сгенерируйте текст поздравления, включающий три
пожелания. Комбинации эпитетов и пожеланий должны быть случайными. В результате
необходимо получить строку, по следующему примеру: «Дорогой Илон Маск, от всего сердца
поздравляю тебя с днем рождения, желаю космического терпения, бесконечного здоровья и
безудержного воображения!». Для реализации используйте функции array_rand и implode
*/

$desire = ['счястья','процветания','успеха','совершенства','спокойствия','упорства','здоровья'];
$epithets = ['вечного','постоянного','непременного','достойного','всепоглощающего','крепкого','блистательного'];
shuffle($desire);
shuffle($epithets);

$count = count($desire) - 2;
while ($count) {
    $wishes[] = array_shift($epithets) . ' ' . array_shift($desire);
    $count--;
}
$wishesFinal[] = array_shift($epithets) . ' ' . array_shift($desire);
$wishesFinal[] = array_shift($epithets) . ' ' . array_shift($desire);

array_push($wishes, implode(" и ", $wishesFinal));
$str = implode(", ", $wishes);


$name = readline("Как тебя зовут, именинник? ");
$name = empty($name) ? "Незнакомец" : $name;

$congratulations = "Дорогой {$name}, от всего сердца поздравляю тебя с днем рождения, желаю {$str}!";
print_r($congratulations);