<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6fdd34da8573b6166ca523559410510
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6fdd34da8573b6166ca523559410510::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6fdd34da8573b6166ca523559410510::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}