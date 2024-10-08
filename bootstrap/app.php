<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
       $middleware->group('web',[
           \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
           \Illuminate\Session\Middleware\StartSession::class,
           \Illuminate\View\Middleware\ShareErrorsFromSession::class,
           \Illuminate\Routing\Middleware\SubstituteBindings::class,
           \App\Http\Middleware\LanguageSwitcher::class,
       ]);
        $middleware->alias([
            'admin' => \App\Http\Middleware\Admin::class,
            'convertToWebp' => \App\Http\Middleware\ConvertImageToWebp::class,
            'stylist' => \App\Http\Middleware\Stylist::class,
            'distributor'=>\App\Http\Middleware\Distributor::class,
            'distributorAccess'=>\App\Http\Middleware\DistributorAccess::class,

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->renderable(function (NotFoundHttpException $e) {
            return response()->view('errors.404', [], 404);
        });
    })
    ->create();
