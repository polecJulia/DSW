<?php

declare(strict_types=1);

namespace Src\Calculator;

use Src\Model\Product;

class SumCalculator implements CalculatorInterface
{

    public function calculate(array $products): int
    {
        $sum = 0;
        foreach ($products as $product)
        {
            /** @var Product $product */
            $sum += $product->getPrice();
        }

        return $sum;
    }
}