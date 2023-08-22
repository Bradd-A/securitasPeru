<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfa022cdd92cb47098ffd012bf9502ff4
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

        spl_autoload_register(array('ComposerAutoloaderInitfa022cdd92cb47098ffd012bf9502ff4', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfa022cdd92cb47098ffd012bf9502ff4', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfa022cdd92cb47098ffd012bf9502ff4::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
