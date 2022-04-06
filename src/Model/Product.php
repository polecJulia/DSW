<?php

declare(strict_types=1);

namespace Src\Model;

use Src\Storage\StockStorage;

abstract class Product
{
    private int $id;
    private string $name;
    private Brand $brand;
    private int $price;
    protected StockStorage $stockStorage;

    public function __construct(int $id, string $name, Brand $brand, int $price)
    {

        $this->id = $id;
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
    }

    abstract public function isAvailable(): bool;


    public function getfullname(): string
    {
        return sprintf(
            '%s - %s (%s)',
            $this->name,
            $this->brand->getName(),
            $this->brand->getProducer()->getName()
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBrand(): Brand
    {
        return $this->brand;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}