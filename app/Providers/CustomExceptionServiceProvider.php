<?php

namespace App\Providers;

use Illuminate\Foundation\Configuration\Exceptions;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CustomExceptionServiceProvider
{
    public static function register(Exceptions $exceptions)
    {
        // Handle 404 Not Found
        $exceptions->render(function (NotFoundHttpException $e, $request) {
            return response()->view('errors.404', [], 404);
        });

        // Handle 500 Internal Server Error
        $exceptions->render(function (HttpException $e, $request) {
            if ($e->getStatusCode() === 500) {
                return response()->view('errors.500', [], 500);
            }
        });
    }
}
