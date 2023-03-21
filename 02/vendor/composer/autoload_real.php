<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6a7ff0f0ff6339c7cf49998abf7bd00f
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

        spl_autoload_register(array('ComposerAutoloaderInit6a7ff0f0ff6339c7cf49998abf7bd00f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6a7ff0f0ff6339c7cf49998abf7bd00f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6a7ff0f0ff6339c7cf49998abf7bd00f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
