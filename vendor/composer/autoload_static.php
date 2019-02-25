<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf973dd234b036c567c059b20a0212f90
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/App/Controllers/PagesController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/App/Controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/Core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/Core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/Core/Router.php',
        'ComposerAutoloaderInitf973dd234b036c567c059b20a0212f90' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitf973dd234b036c567c059b20a0212f90' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/Core/Database/Connector.php',
        'Post' => __DIR__ . '/../..' . '/Array/index.php',
        'Project' => __DIR__ . '/../..' . '/App/Models/Project.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/Core/Database/QueryBuilder.php',
        'Tasks' => __DIR__ . '/../..' . '/tasks.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf973dd234b036c567c059b20a0212f90::$classMap;

        }, null, ClassLoader::class);
    }
}