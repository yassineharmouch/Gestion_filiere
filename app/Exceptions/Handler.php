<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
      /**
     * Convert an authentication exception into a response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        $guard = array_get( $exception->guards(), 0);
        //dd($guard);
        switch ($guard) {
            case 'admin':
              $redirect = redirect()->guest(route('admin.login'));
                break;
            case 'enseignant':
                $redirect = redirect()->guest(route('enseignant.login'));
                break; 
            case 'entreprise':
                $redirect = redirect()->guest(route('entreprise.login'));
                    break; 
            case 'etudiant':
                $redirect = redirect()->guest(route('etudiant.login'));
                    break;          
            default:
            $redirect = redirect()->guest(route('login'));
                break;
        };

        return $request->expectsJson()
                    ? response()->json(['message' => $exception->getMessage()], 401)
                    : $redirect ?? route('login');
    }

}
