<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9502da23942d2b12d31e605ef15b02b5
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9502da23942d2b12d31e605ef15b02b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9502da23942d2b12d31e605ef15b02b5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9502da23942d2b12d31e605ef15b02b5::$classMap;

        }, null, ClassLoader::class);
    }
}