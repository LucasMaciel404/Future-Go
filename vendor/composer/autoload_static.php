<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a5442bbdba4fcb6da47c31ca152255c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a5442bbdba4fcb6da47c31ca152255c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a5442bbdba4fcb6da47c31ca152255c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5a5442bbdba4fcb6da47c31ca152255c::$classMap;

        }, null, ClassLoader::class);
    }
}
