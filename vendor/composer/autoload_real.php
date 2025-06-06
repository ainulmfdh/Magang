<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7afe9447753c3b7f7f110a5d003aa0cc
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit7afe9447753c3b7f7f110a5d003aa0cc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7afe9447753c3b7f7f110a5d003aa0cc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7afe9447753c3b7f7f110a5d003aa0cc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
