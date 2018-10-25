<?php

namespace Pim\Wynd\Model;

class Product
{
    /** @var string */
    private $title;

    /** @var string */
    private $barCode;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getBarCode()
    {
        return $this->barCode;
    }

    /**
     * @param string $barCode
     */
    public function setBarCode($barCode)
    {
        $this->barCode = $barCode;
    }
}
