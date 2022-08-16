<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="?controller=home">[на главную]</a>
<a href="?controller=security&action=logout">[выйти]</a>
<h1>Список задач</h1>
<form method="post" action="?controller=tasks">
    <input type="text" name="description" placeholder="добавьте задачу">
    <input type="submit" value="добавить">
</form>
<br>
<?php if (isset($_SESSION['tasks']) && !empty($_SESSION['tasks'])): ?>
    <?php foreach ($_SESSION['tasks'] as $key => $product): ?>
        * <?=$product->getDescription()?> <a href="?controller=tasks&action=delete&key=<?=$key?>">[x]</a><br>
    <?php endforeach; ?>
<?php else: ?>
    нет задач
<?php endif; ?>
</body>
</html>