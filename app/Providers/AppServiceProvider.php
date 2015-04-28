<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Factory;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot(Factory $validator)
	{
		$path = app_path() . '/Validators';
        $list = new \RecursiveDirectoryIterator($path);
        $folders = new \RecursiveIteratorIterator($list);

        foreach($folders as $folder) {
            if (!in_array($folder->getFilename(), array(".", ".."))) {
                require_once $folder->getPathname();
            }
        }
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

}
