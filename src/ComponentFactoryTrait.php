<?php namespace CI4Xpander_Component;

trait ComponentFactoryTrait
{
    public static function create()
    {
        return new self();
    }
}