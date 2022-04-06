<?php

declare(strict_types=1);

namespace Src\Model;

class Brand
{
    private string $name;
    private Producer $producer;

    public function __construct(string $name, Producer $producer)
    {
        $this->name = $name;
        $this->producer = $producer;
    }

    public function getProducer(): Producer
    {
        return $this->producer;
    }

    public function getName(): string
    {
        return $this->name;
    }
}