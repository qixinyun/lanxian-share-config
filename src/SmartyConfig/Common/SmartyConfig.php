<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/lanxian-share-config/src/SmartyConfig/Lx',
            S_ROOT.'vendor/qixinyun/lanxian-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/lanxian-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
