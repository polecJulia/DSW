<?php

namespace Src;

use Src\Factory\ObjectFactory;
use Src\Calculator\SumCalculator;
use Src\Calculator\SumWithTaxCalculator;
use Src\Storage\StockStorage;

class Application
{
    public function run(): void
    {
        $sumCalculator = new SumCalculator();
        $taxCal = new SumWithTaxCalculator();
        $factory = new ObjectFactory();
        $storage = new StockStorage();

        $products = $factory->create();

        foreach ($products as $product)
        {
            $storage->addProduct($product,10);
        }

        print sprintf('Łączna suma: %d', $sumCalculator->calculate($products));
        echo "<br>";
        print sprintf('Łączna suma + VAT: %d', $taxCal->calculate($products));
        echo "<br>";
        print sprintf('Łączna ilość: %d', $storage->getTotalStockAmount());
    }
}