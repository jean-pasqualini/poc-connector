<?php
/**
 * Created by PhpStorm.
 * User: jpasqualini
 * Date: 25/10/18
 * Time: 15:44
 */

namespace Marketplace\Model;


interface ProductInterface
{
    public function getName();

    public function getEan();
}