<?php
/**
 * Created by PhpStorm.
 * User: jpasqualini
 * Date: 25/10/18
 * Time: 16:18
 */

namespace Connector\Pim\Wynd\Manager;

use Connector\Pim\Wynd\Model\ProductWrapper;
use Marketplace\Manager\ProductManagerInterface;
use Marketplace\Model\ProductCollection;
use Pim\Wynd\Manager\ProductManager as ProductManagerWynd;
use Pim\Wynd\Model\Product;

class ProductManager implements ProductManagerInterface
{
    /** @var ProductManagerWynd */
    private $manager;

    public function __construct(ProductManagerWynd $manager)
    {
        $this->manager = $manager;
    }

    public function findAll(): ProductCollection
    {
        return new ProductCollection(
            array_map([$this, 'transform'], $this->manager->all())
        );
    }

    public function transform(Product $product) {
        return new ProductWrapper($product);
    }
}