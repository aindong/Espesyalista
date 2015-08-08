<?php
namespace App\Espesyalista\Api\User\Providers;

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
		App::register('App\Espesyalista\Api\User\Providers\RouteServiceProvider');

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
        $this->app->bind('\App\Espesyalista\Api\User\Interfaces\UsersRepoInterface', function ($app) {
            return new App\Espesyalista\Api\User\Repositories\UsersRepo(new App\Models\User);
        });

        $this->app->bind('\App\Espesyalista\Api\User\Interfaces\UserGroupsRepoInterface', function ($app) {
            return new App\Espesyalista\Api\User\Repositories\UserGroupsRepo(new App\Models\UserGroup);
        });

        $this->app->bind('\App\Espesyalista\Api\User\Interfaces\UserRolesRepoInterface', function ($app) {
            return new App\Espesyalista\Api\User\Repositories\UserPermissionsRepo(new App\Models\UserPermission);
        });

    }
}