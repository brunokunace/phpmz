<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca4de88b38c2a45723d9b753d6a28794
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HeroProject\\' => 12,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HeroProject\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca4de88b38c2a45723d9b753d6a28794::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca4de88b38c2a45723d9b753d6a28794::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
