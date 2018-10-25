<?php

namespace Pim\Wynd\Manager;

use Pim\Wynd\Model\Product;

class ProductManager
{
    public function all()
    {
        $artichaud = new Product();
        $artichaud->setBarCode('123456783');
        $artichaud->setTitle('artichaud');

        $chocolatine = new Product();
        $chocolatine->setBarCode('12343672');
        $chocolatine->setTitle('chocolatine');

        return [$artichaud, $chocolatine];
    }
}