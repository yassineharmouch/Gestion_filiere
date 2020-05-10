<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            //dd($guard);
            switch ($guard) {
                case 'admin':
                    return redirect()->route('admin.home');
                    break;
                case 'etudiant':
                    return redirect()->route('etudiant.home');
                    break;
                case 'enseignant':
                    return redirect()->route('enseignant.home');
                    break;
                case 'entreprise':
                    return redirect()->route('entreprise.home');
                    break;
                default:
                return redirect('/accueil');
                    break;
            }
            
        }

        return $next($request);
    }
}
