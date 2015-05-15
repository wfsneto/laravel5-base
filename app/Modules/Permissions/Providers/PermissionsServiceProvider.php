<?php
namespace App\Modules\Permissions\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class PermissionsServiceProvider extends ServiceProvider
{
	/**
	 * Register the Permissions module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\Permissions\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Permissions module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('permissions', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('permissions', realpath(__DIR__.'/../Resources/Views'));
	}
}
