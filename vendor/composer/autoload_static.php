<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabef6997020c976a0022cba810415850
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Prototype\\' => 10,
        ),
        'C' => 
        array (
            'Computer\\' => 9,
            'Company\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Prototype\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Prototype',
        ),
        'Computer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Computer',
        ),
        'Company\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Company',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitabef6997020c976a0022cba810415850::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitabef6997020c976a0022cba810415850::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitabef6997020c976a0022cba810415850::$classMap;

        }, null, ClassLoader::class);
    }
}
