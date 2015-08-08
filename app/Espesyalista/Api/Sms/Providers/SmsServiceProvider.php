<?php
namespace App\Espesyalista\Sms\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
	/**
	 * Register the Sms module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Espesyalista\Sms\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Sms module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('sms', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('sms', realpath(__DIR__.'/../Resources/Views'));
	}
}