<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f7b33b212d218da6452f6ae1957a44e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpInflector\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpInflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/koenpunt/php-inflector/lib',
        ),
    );

    public static $classMap = array (
        'BaseModel' => __DIR__ . '/../..' . '/classes/BaseModel.php',
        'DB' => __DIR__ . '/../..' . '/classes/DB.php',
        'Database' => __DIR__ . '/../..' . '/classes/Database.php',
        'Helper' => __DIR__ . '/../..' . '/classes/Helper.php',
        'Query' => __DIR__ . '/../..' . '/classes/Query.php',
        'Session' => __DIR__ . '/../..' . '/classes/Session.php',
        'User' => __DIR__ . '/../..' . '/classes/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f7b33b212d218da6452f6ae1957a44e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f7b33b212d218da6452f6ae1957a44e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f7b33b212d218da6452f6ae1957a44e::$classMap;

        }, null, ClassLoader::class);
    }
}