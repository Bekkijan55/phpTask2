<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdebd82f2536c09f80bb04446b35e7059
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gumlet\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gumlet\\' => 
        array (
            0 => __DIR__ . '/..' . '/gumlet/php-image-resize/lib',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Gregwar\\Image' => 
            array (
                0 => __DIR__ . '/..' . '/gregwar/image',
            ),
            'Gregwar\\Cache' => 
            array (
                0 => __DIR__ . '/..' . '/gregwar/cache',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdebd82f2536c09f80bb04446b35e7059::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdebd82f2536c09f80bb04446b35e7059::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitdebd82f2536c09f80bb04446b35e7059::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}