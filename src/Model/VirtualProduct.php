<?php

declare(strict_types=1);

namespace Src\Model;

class VirtualProduct extends Product
{

    private bool $isSubscription;

    public function __construct(int $id, string $name, Brand $brand, int $price, bool $isSubscription )
    {
        parent::__construct($id, $name, $brand, $price);
        $this->isSubscription = $isSubscription;
    }

    public function isAvailable(): bool
    {
        return true;
    }

    public function isSubscription(): bool
    {
        return $this->isSubscription;
    }
}