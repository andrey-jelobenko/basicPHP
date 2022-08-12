<?php

class Cart
{
    private array $products = [];

    public function getPrice(): float
    {
        $price = 0;
        foreach ($this->products as $product) {
            $price += $product->getPrice();
        }
        return $price;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function removeProduct(Product $product): void
    {
        unset($this->products[$product->getTitle()]);
    }

    public function getProducts(): array
    {
        return $this->products;
    }


}