<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita477b087d7d4075d64e00bfeece9487e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita477b087d7d4075d64e00bfeece9487e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita477b087d7d4075d64e00bfeece9487e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita477b087d7d4075d64e00bfeece9487e::$classMap;

        }, null, ClassLoader::class);
    }
}