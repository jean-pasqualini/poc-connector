<?php

namespace App;

use Marketplace\Manager\ProductManagerInterface;

use Connector\Pim\Wynd\Manager\ProductManager as WyndConnectorProductManager;
use Connector\Pim\Russe\Manager\ProductManager as RusseConnectorProductManager;
use Pim\Wynd\Manager\ProductManager as WyndProductManager;
use Pim\Russe\Manager\ProductManager as RusseProductManager;

class PimConnectorFactory
{
    public function factory(string $connector): ProductManagerInterface
    {
        if ('wynd' === $connector) {
            return new WyndConnectorProductManager(new WyndProductManager());
        }

        if ('russe' === $connector) {
            return new RusseConnectorProductManager(new RusseProductManager());
        }

        throw new \RuntimeException(sprintf('the connector "%s" is not registered', $connector));
    }

}