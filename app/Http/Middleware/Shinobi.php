<?php

namespace App\Http\Middleware;

use Closure;

class Shinobi
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
        $route = $request->route()->getAction();

		if (\Auth::check()) {
            if (!\Auth::user()->is( $route['shinobi'] )) {
                return redirect(action('HomeController@index'))
                    ->with('info', 'Você não tem permissão para acessar essas área');
            }
        }

        return $next($request);
	}

}
