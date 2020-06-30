<?php namespace CI4Xpander;

use CI4Xpander\Component\ComponentFactoryTrait;

class Component
{
    protected $_name;

    use \CI4Xpander\Util\ClassInitializerTrait, \CI4Xpander\Util\PropertyInitializerTrait, ComponentFactoryTrait;

    public function __construct(...$params)
    {

    }

    public function render()
    {
        return '';
    }

    public function __toString()
    {
        return $this->render();
    }
}
