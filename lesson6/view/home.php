<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<h1><?=$pageHeader?></h1>
<p>Рады вас приветствовать, <?=$username?>!</p>
<a href="?controller=tasks">Задачи</a><br><br>
<a href="?controller=security&action=logout">[выйти]</a>
</body>