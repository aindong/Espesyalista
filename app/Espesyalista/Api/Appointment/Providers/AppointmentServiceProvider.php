<?php
namespace App\Espesyalista\Api\Appointment\Providers;

use App;
use Illuminate\Support\ServiceProvider;
use Lang;
use View;

class AppointmentServiceProvider extends ServiceProvider
{
	/**
	 * Register the Appointment module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Espesyalista\Api\Appointment\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Appointment module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('appointment', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('appointment', realpath(__DIR__.'/../Resources/Views'));
	}
}