<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit965691f537d38e010f5b0761479ed5bb
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit965691f537d38e010f5b0761479ed5bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit965691f537d38e010f5b0761479ed5bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit965691f537d38e010f5b0761479ed5bb::$classMap;

        }, null, ClassLoader::class);
    }
}
