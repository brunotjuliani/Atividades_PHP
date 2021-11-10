<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda01dcb2843a0b2c2e3e1b2ef9bafa10
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda01dcb2843a0b2c2e3e1b2ef9bafa10::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda01dcb2843a0b2c2e3e1b2ef9bafa10::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitda01dcb2843a0b2c2e3e1b2ef9bafa10::$classMap;

        }, null, ClassLoader::class);
    }
}
