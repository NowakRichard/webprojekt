<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19a21100a078e7ed83608ee08a1fd85e
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\ISO3166\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\ISO3166\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/iso3166/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit19a21100a078e7ed83608ee08a1fd85e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19a21100a078e7ed83608ee08a1fd85e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit19a21100a078e7ed83608ee08a1fd85e::$classMap;

        }, null, ClassLoader::class);
    }
}
