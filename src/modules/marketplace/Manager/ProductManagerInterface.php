<?php

namespace Marketplace\Manager;

use Marketplace\Model\ProductCollection;

interface ProductManagerInterface
{
    public function findAll(): ProductCollection;
}