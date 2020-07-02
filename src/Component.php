<?php namespace CI4Xpander;

class Component
{
    protected $_name;

    use \CI4Xpander\Util\ClassInitializerTrait, \CI4Xpander\Util\PropertyInitializerTrait, \CI4Xpander\Component\ComponentFactoryTrait, \CI4Xpander\Util\ParameterInitializerTrait;

    public function __construct(...$parameters)
    {
        $this->_initParameter($parameters);
        $this->_init();
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
