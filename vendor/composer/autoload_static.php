<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e0bb29cfb321a7820ac5a014780b720
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e0bb29cfb321a7820ac5a014780b720::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e0bb29cfb321a7820ac5a014780b720::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e0bb29cfb321a7820ac5a014780b720::$classMap;

        }, null, ClassLoader::class);
    }
}
