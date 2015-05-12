<?php namespace App\Http\Middleware\Admin;

use Closure;

class Authenticate
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (\Auth::check()) {
            if (!\Auth::user()->is('admin')) {
                echo '<pre>';
                print_r('não tem permissão');
                // print_r($request->route()->getAction());
                echo '<hr>';
                print_r(basename(__FILE__) . ':' . __LINE__);die;;
            }
        }

        return $next($request);
	}

}
