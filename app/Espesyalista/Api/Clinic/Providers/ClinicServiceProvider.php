<?php
namespace App\Espesyalista\Clinic\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class ClinicServiceProvider extends ServiceProvider
{
	/**
	 * Register the Clinic module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Espesyalista\Clinic\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Clinic module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('clinic', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('clinic', realpath(__DIR__.'/../Resources/Views'));
	}
}