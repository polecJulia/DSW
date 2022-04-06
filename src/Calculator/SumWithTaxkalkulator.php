<?php

namespace Src\Calculator;

use Src\Model\Product;

class SumWithTaxCalculator implements CalculatorInterface
{

    private const TAX_RATE = 1.23;

        public function calculate(array $products): int
    {
        $sum = 0;

        foreach ($products as $product)
        {
            /** @var Product $product */
            $priceWithTax = (int) ($product->getPrice() * 100 * self::TAX_RATE) / 100;
            $sum += $priceWithTax;
        }

        return $sum;
    }

}