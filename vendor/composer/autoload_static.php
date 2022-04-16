<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitacb7627a33cc31a1f6607039373ef2df
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitacb7627a33cc31a1f6607039373ef2df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitacb7627a33cc31a1f6607039373ef2df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitacb7627a33cc31a1f6607039373ef2df::$classMap;

        }, null, ClassLoader::class);
    }
}
