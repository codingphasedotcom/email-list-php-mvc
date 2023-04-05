<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88eb27dd38ca15fb72d8b7648361e4fe
{
    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\PageController' => __DIR__ . '/../..' . '/app/controllers/PageController.php',
        'App\\Models\\EmailModel' => __DIR__ . '/../..' . '/app/models/EmailModel.php',
        'Bramus\\Router\\Router' => __DIR__ . '/..' . '/bramus/router/src/Bramus/Router/Router.php',
        'ComposerAutoloaderInit88eb27dd38ca15fb72d8b7648361e4fe' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit88eb27dd38ca15fb72d8b7648361e4fe' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Core\\DBConnection' => __DIR__ . '/../..' . '/core/DBConnection.php',
        'Handler' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
        'Hello\\HelloRouterTestController' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
        'MultilangRouter' => __DIR__ . '/..' . '/bramus/router/demo-multilang/index.php',
        'RouterTest' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
        'RouterTestController' => __DIR__ . '/..' . '/bramus/router/tests/RouterTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit88eb27dd38ca15fb72d8b7648361e4fe::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit88eb27dd38ca15fb72d8b7648361e4fe::$classMap;

        }, null, ClassLoader::class);
    }
}
