<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bbd4dc03646de3d3d161e1103cda40e
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedeSocial\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedeSocial\\' => 
        array (
            0 => __DIR__ . '/../..' . '/RedeSocial',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0bbd4dc03646de3d3d161e1103cda40e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0bbd4dc03646de3d3d161e1103cda40e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0bbd4dc03646de3d3d161e1103cda40e::$classMap;

        }, null, ClassLoader::class);
    }
}
