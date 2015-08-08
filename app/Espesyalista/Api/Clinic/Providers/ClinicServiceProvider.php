<?php
namespace App\Espesyalista\Api\Clinic\Providers;

use App;
use Illuminate\Support\ServiceProvider;
use Lang;
use View;

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
		App::register('App\Espesyalista\Api\Clinic\Providers\RouteServiceProvider');

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

    /**
     * Bind the patientrepointerface to patientrepo
     */
    protected function bindClinicRepositories()
    {
        $this->app->bind('\App\Espesyalista\Api\Clinic\Interfaces\ClinicsRepoInterface', function ($app) {
            return new App\Espesyalista\Api\Clinic\Repositories\ClinicsRepo(new App\Models\User);
        });
    }
}