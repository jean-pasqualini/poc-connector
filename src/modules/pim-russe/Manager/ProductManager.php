<?php

namespace Pim\Russe\Manager;

use Pim\Russe\Model\Product;

class ProductManager
{
    public function all()
    {
        $vodka = new Product();
        $vodka->setEan('123456789');
        $vodka->setName('vodka');
        $vodka->setIsAlcool(true);

        $gun = new Product();
        $gun->setEan('12345672');
        $gun->setName('gun');
        $gun->setIsAlcool(false);

        return [$vodka, $gun];
    }
}