<?php

namespace Marketplace\Model;

class ProductCollection implements \IteratorAggregate
{
    /**
     * @var array
     */
    private $products;

    /**
     * ProductCollection constructor.
     * @param array $products
     */
    public function __construct(array $products)
    {
        foreach ($products as $product) {
            $this->add($product);
        }
    }

    public function add(ProductInterface $product)
    {
        $this->products[] = $product;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->products);
    }
}