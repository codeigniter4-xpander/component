<?php namespace CI4Xpander\Component;

trait ComponentFactoryTrait
{
    public static function create(...$params)
    {
        return new self($params);
    }
}