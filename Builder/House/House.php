<?php
namespace DesignPatterns\Builder\House;
/**
 * 产品类
 * Class House
 * @package DesignPatterns\Builder\House
 */
class House{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}
