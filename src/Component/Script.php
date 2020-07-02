<?php namespace CI4Xpander\Component;

class Script
{
    use \CI4Xpander\Util\ParameterInitializerTrait;

    public function __construct(...$parameters)
    {
        $this->_initParameter($parameters);
    }

    public function render()
    {
        return '';
    }

    public static function create(...$parameters)
    {
        return new self($parameters);
    }
}