<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdfa34547eb1167806314b2b0d178b3e7
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/data',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInitdfa34547eb1167806314b2b0d178b3e7::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}