<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite134dda9bd172e7e41fe37bc11854e4b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite134dda9bd172e7e41fe37bc11854e4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite134dda9bd172e7e41fe37bc11854e4b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
