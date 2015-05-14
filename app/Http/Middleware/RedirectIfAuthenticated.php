<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;

class RedirectIfAuthenticated {

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
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
        if ($this->auth->check())
        {
            if ($this->auth->user()->is('admin')) {
                return new RedirectResponse(action('Admin\HomeController@index'));
            }
            else if ($this->auth->user()->is('company')) {
                return new RedirectResponse(action('Company\HomeController@index'));
            }
            else if ($this->auth->user()->is('vehicle')) {
                return new RedirectResponse(action('Vehicle\HomeController@index'));
            }
            else {
                return new RedirectResponse(action('HomeController@index'));
            }
        }

        return $next($request);
    }

}
