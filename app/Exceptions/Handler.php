<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $e
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {

        if ($exception instanceof ValidationException) {
            return response()->json(
                [ 'error' => $exception->response ], Response::HTTP_UNPROCESSABLE_ENTITY
            );
        }

        if ($exception instanceof ModelNotFoundException) {
            return response()->json(
                [ 'error' => 'Entry for '.str_replace('App\\Models\\', '', $exception->getModel()).' not found'], 
                Response::HTTP_NOT_FOUND
            );
        }

        if ($exception instanceof AuthenticationException) {
            return response()->json(
                [ 'error' => 'Unauthenticated' ], Response::HTTP_UNAUTHORIZED
            );
        }

        if ($exception instanceof AuthorizationException) {
            return response()->json(
                [ 'error' => $exception->getMessage() ], Response::HTTP_FORBIDDEN
            );
        }

        if ($exception instanceof NotFoundHttpException) {
            return response()->json(
                [ 'error' => 'The specified URL could not be found' ], Response::HTTP_NOT_FOUND
            );
        }

        if ($exception instanceof MethodNotAllowedHttpException) {
            return response()->json(
                [ 'error' => 'The specified method for the request is invalid' ], Response::HTTP_METHOD_NOT_ALLOWED
            );
        }

        if ($exception instanceof HttpException) {
            return response()->json(
                [ 'error' => $exception->getMessage() ], $exception->getStatusCode()
            );
        }

        if ($exception instanceof QueryException) {
            $errorCode = $exception->errorInfo[1];

            if ($errorCode == 1451) {
                return response()->json(
                    ['error' => 'Cannot remove this resource permanently. It is related with some other resources.'], 
                    Response::HTTP_CONFLICT);
            }
        }

        if (config('app.debug')) {
            return parent::render($request, $exception);
        }

        return response()->json(
            ['error' => 'Unexpected error. Try later'], 
            Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
