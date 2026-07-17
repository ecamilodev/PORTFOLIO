<?php

use App\Http\Middleware\SecurityHeaders;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Str;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(SecurityHeaders::class);

        // SESSION_ENCRYPT ya cifra la cookie de sesión a nivel de sesión;
        // si EncryptCookies también la cifra, queda doblemente cifrada y
        // Laravel descarta la sesión en cada request (pierde flash/auth).
        $middleware->encryptCookies(except: [
            env('SESSION_COOKIE', Str::slug(env('APP_NAME', 'laravel'), '_').'_session'),
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
