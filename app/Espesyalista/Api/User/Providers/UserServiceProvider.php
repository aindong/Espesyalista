<?php
namespace App\Espesyalista\User\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
	/**
	 * Register the User module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Espesyalista\User\Providers\RouteServiceProvider');

		$this->registerNamespaces();
        $this->bindUserRepositories();
	}

	/**
	 * Register the User module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('user', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('user', realpath(__DIR__.'/../Resources/Views'));
	}

    /**
     * Bind the patientrepointerface to patientrepo
     */
    protected function bindUserRepositories()
    {
        $this->app->bind('\App\Espesyalista\Interfaces\UsersRepoInterface', function ($app) {
            return new PatientRepo(new App\Models\User);
        });

        $this->app->bind('\App\Espesyalista\Interfaces\UserGroupsRepoInterface', function ($app) {
            return new PatientRepo(new App\Models\Patients);
        });

        $this->app->bind('\App\Espesyalista\Interfaces\UserRolesRepoInterface', function ($app) {
            return new PatientRepo(new App\Models\Patients);
        });

    }
}