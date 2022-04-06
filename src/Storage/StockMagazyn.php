<?php

declare(strict_types=1);

namespace Src\Storage;

use Src\Model\Product;
use Src\Model\VirtualProduct;

class StockStorage
{
    private array $products;

    public function getProducts(): array
    {
        return $this->products;
    }


    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

    public function addProduct(Product $product, int $amount)
    {
        if (get_class($product) === VirtualProduct::class)
        {
            $amount = 0;
        }

        $this->products[$product->getId()] = $amount;
    }

    public function getTotalStockAmount(): int
    {
        $sum = 0;
        foreach ($this->products as $amount)
        {
            $sum +=$amount;
        }

        return $sum;
    }

    public function checkIfIsAvailable(Product $product): bool
    {

    }
}