<?php

declare(strict_types=1);

namespace Src\Model;

use Src\Storage\StockStorage;

class CongigurableProduct extends Product
{

    private string $color;
    private string $size;

    public function __construct(
        int $id,
        string $name,
        Brand $brand,
        int $price,
        string $color,
        string $size,

    )
    {
        parent::__construct($id, $name, $brand, $price);
        $this->color = $color;
        $this->size = $size;
    }


    public function isAvailable(): bool
    {
       // return $this->stockStorage->
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getSize(): string
    {
        return $this->size;
    }
}