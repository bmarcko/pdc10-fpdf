<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd207bf36f479b7b62ce91449eb3135e5
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\Pdc10GeneratingPdf\\' => 24,
        ),
        'F' => 
        array (
            'Fpdf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\Pdc10GeneratingPdf\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Fpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/fpdf/fpdf/src/Fpdf',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd207bf36f479b7b62ce91449eb3135e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd207bf36f479b7b62ce91449eb3135e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd207bf36f479b7b62ce91449eb3135e5::$classMap;

        }, null, ClassLoader::class);
    }
}