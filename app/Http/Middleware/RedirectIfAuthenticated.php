<?php

namespace App\Http\Middleware;
use PDOException;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::home);
            }
          
           

            //return guard::render($request, $next);
        }
         
          
        
        
        return $next($request);
          //return  redirect(RouteServiceProvider::login)
         // ->withErrors("message","Your connecttion Probleme");
        // ->with("status","Your connecttion Probleme");

        

//class Handler extends ExceptionHandler
//{
   // public function render($request, Throwable $exception)
    //{
    //    if ($exception instanceof PDOException) {
     //       return response()->view('errors.database', [], 500);
     //   }

      //  return parent::render($request, $exception);
   // }
//}

         
          
    }
}
