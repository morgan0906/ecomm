<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ce14032fb0e89a046d6decbe6d8e13a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ce14032fb0e89a046d6decbe6d8e13a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ce14032fb0e89a046d6decbe6d8e13a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
