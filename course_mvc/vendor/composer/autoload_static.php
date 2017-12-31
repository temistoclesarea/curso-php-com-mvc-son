<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35d988b997ccde8e8ed7ef24c41479e9
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SON\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SON\\' => 
        array (
            0 => __DIR__ . '/..' . '/SON',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit35d988b997ccde8e8ed7ef24c41479e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35d988b997ccde8e8ed7ef24c41479e9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}