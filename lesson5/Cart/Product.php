<?php

class Product
{
    private string $title;
    private float $price;
    private int $count;
    private array $components;

    public function __construct(string $title, float $price, int $count = 1, $components = [])
    {
        $this->title = $title;
        $this->price = $price;
        $this->count = $count;
        $this->components = $components;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getPrice(): float
    {
        $price = 0;
        foreach ($this->components as $component) {
            $price += $component->getPrice();
        }
        $this->price *= $this->count;
        $this->price += $price * $this->count;
        return $this->price;
    }

    public function getComponents(): array
    {
        return $this->components;
    }

    public function setComponents(array $components): void
    {
        $this->components = $components;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }

}