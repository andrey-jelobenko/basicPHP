<?php
include_once "Product.php";
include_once "Cart.php";

$tv = new Product("Телевизор", 10, 2);

$prod1 = new Product("Системный блок", 10, 1);

$mon1 = new Product("Экран", 10, 1);
$mon2 = new Product("Корпус", 10, 1);
$prod2 = new Product("Монитор", 10, 2, [$mon1, $mon2]);

$computer = new Product("Компьютер", 10, 2, [$prod1, $prod2]);

$cart = new Cart();
$cart->addProduct($tv);
$cart->addProduct($computer);

echo $cart->getPrice();