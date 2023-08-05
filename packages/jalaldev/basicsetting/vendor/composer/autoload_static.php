<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit361f936808eff5f6101828e891c6cb50
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jalaldev\\Basicsetting\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jalaldev\\Basicsetting\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Jalaldev\\Basicsetting\\BasicSettingController' => __DIR__ . '/../..' . '/src/BasicSettingController.php',
        'Jalaldev\\Basicsetting\\BasicSettingProvider' => __DIR__ . '/../..' . '/src/BasicSettingProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit361f936808eff5f6101828e891c6cb50::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit361f936808eff5f6101828e891c6cb50::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit361f936808eff5f6101828e891c6cb50::$classMap;

        }, null, ClassLoader::class);
    }
}
