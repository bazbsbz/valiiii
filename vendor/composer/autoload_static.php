<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb18299450cf2d3ad056aa45763135a2a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
            'TuriBot\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
        'TuriBot\\' => 
        array (
            0 => __DIR__ . '/..' . '/davtur19/turibot/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb18299450cf2d3ad056aa45763135a2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb18299450cf2d3ad056aa45763135a2a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
