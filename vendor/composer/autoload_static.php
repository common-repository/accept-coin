<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7a34a11de09b247cabb2e2a118fb66d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AcceptCoin_Cryptocurrency_Payment_Gateway_for_WooCommerce\\' => 58,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AcceptCoin_Cryptocurrency_Payment_Gateway_for_WooCommerce\\' => 
        array (
            0 => __DIR__ . '/../..',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7a34a11de09b247cabb2e2a118fb66d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7a34a11de09b247cabb2e2a118fb66d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc7a34a11de09b247cabb2e2a118fb66d::$classMap;

        }, null, ClassLoader::class);
    }
}
