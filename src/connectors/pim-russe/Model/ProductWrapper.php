<?php
/**
 * Created by PhpStorm.
 * User: jpasqualini
 * Date: 25/10/18
 * Time: 16:07
 */

namespace Connector\Pim\Russe\Model;


use Marketplace\Model\ProductInterface;
use Pim\Russe\Model\Product;

class ProductWrapper implements ProductInterface
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getName()
    {
       return $this->product->getName();
    }

    public function getEan()
    {
        return $this->product->getEan();
    }
}