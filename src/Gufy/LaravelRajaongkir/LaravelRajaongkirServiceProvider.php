<?php

namespace Gufy\LaravelRajaongkir;

use Illuminate\Support\ServiceProvider;

class LaravelRajaongkirServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
		$this->app->singleton('rajaongkir',function($app){
			return new Rajaongkir($app['config']['rajaongkir']);
		});
	}
	public function boot(){
      $path = config_path('rajaongkir.php');

      $this->publishes([
          __DIR__.'/config.php' => $path,
      ], 'config');

      if (file_exists($path)) {
          $this->mergeConfigFrom($path, 'rajaongkir');
      }
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['rajaongkir'];
	}

}
