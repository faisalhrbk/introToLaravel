<?php

// use App\Http\Middleware\AgeCheck;
// use App\Http\Middleware\CountryCheck;
use App\Http\Middleware\PraticeMw;
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
        // ye line khud likhni hai global middleware
        // $middleware->append(AgeCheck::class);

        // grouping of middlewares

        // $middleware->appendToGroup("ageCountryCheck",[CountryCheck::class, AgeCheck::class]);

    // $middleware->append(PraticeMw::class);
        
  
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
