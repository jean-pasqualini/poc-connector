<?php
/**
 * Created by PhpStorm.
 * User: jpasqualini
 * Date: 25/10/18
 * Time: 16:07
 */

namespace Connector\Pim\Wynd\Model;

use Marketplace\Model\ProductInterface;
use Pim\Wynd\Model\Product;

class ProductWrapper implements ProductInterface
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getName()
    {
        return $this->product->getTitle();
    }

    public function getEan()
    {
        return $this->product->getBarCode();
    }
}