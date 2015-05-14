<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;

class Shinobi
{
    public function __construct()
    {
        $this->user = \Auth::user();
    }

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
            $forbidden = true;
            $roles = isset($route['roles']) ? $route['roles'] : [];

            if (is_array($roles)) {
                foreach ($roles as $role) {
                    if ($this->user->is($role)) {
                        $forbidden = false;
                        break;
                    }
                }
            }
            else {
                if ($this->user->is($roles)) {
                    $forbidden = false;
                }
            }

            if ($forbidden) {
                if ($this->user->is('admin')) {
                    if ($request->url() != url('/admin')) {
                        return new RedirectResponse(action('Admin\HomeController@index'));
                    }
                }
                else if ($this->user->is('company')) {
                    if ($request->url() != url('/company')) {
                        return new RedirectResponse(action('Company\HomeController@index'));
                    }
                }
                else if ($this->user->is('vehicle')) {
                    if ($request->url() != url('/vehicle')) {
                        return new RedirectResponse(action('Vehicle\HomeController@index'));
                    }
                }
                else {
                    \Auth::logout();
                    if ($request->url() != url('/')) {
                        return new RedirectResponse(action('HomeController@index'));
                    }
                }
            }
        }

        return $next($request);
    }

}
