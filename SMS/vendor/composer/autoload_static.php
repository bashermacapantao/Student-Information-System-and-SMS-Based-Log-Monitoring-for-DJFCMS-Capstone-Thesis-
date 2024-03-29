<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf055bdd77b83b1b3adcf5f5c946eeaa7
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf055bdd77b83b1b3adcf5f5c946eeaa7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf055bdd77b83b1b3adcf5f5c946eeaa7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf055bdd77b83b1b3adcf5f5c946eeaa7::$classMap;

        }, null, ClassLoader::class);
    }
}
