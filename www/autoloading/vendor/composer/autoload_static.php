<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbed0b63306a3c84f5cdee5f6ce452b83
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'autoload\\classes\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'autoload\\classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbed0b63306a3c84f5cdee5f6ce452b83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbed0b63306a3c84f5cdee5f6ce452b83::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
