<?php
/**
 * Created by PhpStorm.
 * User: jpasqualini
 * Date: 25/10/18
 * Time: 16:18
 */

namespace Connector\Pim\Russe\Manager;

use Connector\Pim\Russe\Model\ProductWrapper;
use Marketplace\Manager\ProductManagerInterface;
use Marketplace\Model\ProductCollection;
use Pim\Russe\Manager\ProductManager as ProductManagerRusse;
use Pim\Russe\Model\Product;

class ProductManager implements ProductManagerInterface
{
    /** @var ProductManagerRusse */
    private $manager;

    public function __construct(ProductManagerRusse $manager)
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