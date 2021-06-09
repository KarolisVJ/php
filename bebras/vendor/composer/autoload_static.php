<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4f089234b0c9d7092150e7710b5ccb9
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4f089234b0c9d7092150e7710b5ccb9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4f089234b0c9d7092150e7710b5ccb9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc4f089234b0c9d7092150e7710b5ccb9::$classMap;

        }, null, ClassLoader::class);
    }
}