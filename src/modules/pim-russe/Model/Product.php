<?php

namespace Pim\Russe\Model;

class Product
{
    /** @var string */
    private $name;

    /** @var string */
    private $ean;

    /** @var bool */
    private $isAlcool;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    /**
     * @return bool
     */
    public function isAlcool()
    {
        return $this->isAlcool;
    }

    /**
     * @param bool $isAlcool
     */
    public function setIsAlcool($isAlcool)
    {
        $this->isAlcool = $isAlcool;
    }
}