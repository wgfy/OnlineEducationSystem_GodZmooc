<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit691ae521a5dd064267bcbf4ecab47bb3
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit691ae521a5dd064267bcbf4ecab47bb3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
