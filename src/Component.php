<?php namespace CI4Xpander_Component;

class Component
{
    protected $_name;

    public function render()
    {
        return '';
    }

    public function __toString()
    {
        return $this->render();
    }
}