<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Request;

class ProgrammingTestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $halaman = '';
		if ( Request::segment(1) =='buku') {
			$halaman = 'buku';
		} 
		view()->share('halaman',$halaman);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
