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
                return redirect(action('HomeController@index'))
                    ->with('info', 'Você não tem permissão para acessar essas área');
            }
        }

        return $next($request);
	}

}
