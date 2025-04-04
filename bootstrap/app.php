<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(\Illuminate\Session\Middleware\StartSession::class);
        $middleware->alias([
            'AdminMiddleware' => \App\Http\Middleware\AdminMiddleware::class,
            'BusinessUserMiddleware' => \App\Http\Middleware\BusinessUserMiddleware::class,
            'ClientMiddleware' => \App\Http\Middleware\ClientMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();