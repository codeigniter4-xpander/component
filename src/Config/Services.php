<?php namespace CI4Xpander\Config;

class Services extends \CodeIgniter\Config\Services
{
    public static function componentScriptsCollection(bool $shared = true)
    {
        if ($shared) {
            return static::getSharedInstance('componentScriptsCollection');
        }

        return new \Ci4Xpander\Component\Script\Collection();
    }
}