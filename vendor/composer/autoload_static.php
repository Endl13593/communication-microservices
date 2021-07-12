<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaafc464dc730bd634c816f50de459066
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Endl13593\\CommunicationMicroservices\\' => 37,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Endl13593\\CommunicationMicroservices\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaafc464dc730bd634c816f50de459066::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaafc464dc730bd634c816f50de459066::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaafc464dc730bd634c816f50de459066::$classMap;

        }, null, ClassLoader::class);
    }
}