<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Libraries\Tree;

class LibrariesServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerTreeLibrary();
	}

    public function registerTreeLibrary()
    {
        $this->app->bindShared('tree', function($app)
        {
            return new Tree;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('tree');
    }

}
