<?php

declare(strict_types=1);

namespace Src\Calculator;

interface CalculatorInterface
{
    public function calculate(array $products): int;
}