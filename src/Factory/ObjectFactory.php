<?php

declare(strict_types=1);

namespace Src\Factory;
use Src\Model\Brand;
use Src\Model\CongigurableProdukt;
use Src\Model\Producer;
use Src\Model\SimpleProduct;
use Src\Model\VirtualProduct;

class ObjectFactory
{

    public function create(): array
    {
        $producer = new Producer('Some producer', 'example.com');
        $brand = new Brand('Some brand', $producer);

        $product1 = new SimpleProduct(1,'hoodie',$brand,100);
        $product2 = new VirtualProduct(2,'Newsletter subscription', $brand, 50, true);
        $product3 = new CongigurableProdukt(3,'dress',$brand,111,'blue','M');

        return
        [
            $product1,
            $product2,
            $product3
        ];
    }
}