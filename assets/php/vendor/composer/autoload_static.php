<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc58e0c34d704b6b6ddda4468fc045cb4
{
    public static $classMap = array (
        'CallBack\\CallBackModel' => __DIR__ . '/../..' . '/src/CallBackModel.php',
        'CallBack\\Creator' => __DIR__ . '/../..' . '/src/Creator.php',
        'CallBack\\Database' => __DIR__ . '/../..' . '/src/Database.php',
        'CallBack\\MySQL_Creator' => __DIR__ . '/../..' . '/src/MySQL_Creator.php',
        'CallBack\\MySQL_Writer' => __DIR__ . '/../..' . '/src/MySQL_Writer.php',
        'CallBack\\TXT_Creator' => __DIR__ . '/../..' . '/src/TXT_Creator.php',
        'CallBack\\TXT_Writer' => __DIR__ . '/../..' . '/src/TXT_Writer.php',
        'CallBack\\Writer' => __DIR__ . '/../..' . '/src/Writer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc58e0c34d704b6b6ddda4468fc045cb4::$classMap;

        }, null, ClassLoader::class);
    }
}