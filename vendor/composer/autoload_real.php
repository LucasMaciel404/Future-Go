<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitacb7627a33cc31a1f6607039373ef2df
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitacb7627a33cc31a1f6607039373ef2df', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitacb7627a33cc31a1f6607039373ef2df', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitacb7627a33cc31a1f6607039373ef2df::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
