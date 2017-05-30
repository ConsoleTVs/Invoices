<?php
/**
  * This file is part of consoletvs/invoices.
  *
  * (c) Erik Campobadal <soc@erik.cat>
  *
  * For the full copyright and license information, please view the LICENSE
  * file that was distributed with this source code.
  */

namespace ConsoleTVs\Invoices;

use Illuminate\Support\ServiceProvider;

/**
 * This is the InvoicesServiceProvider class.
 *
 * @author Erik Campobadal <soc@erik.cat>
 */
class InvoicesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Templates', 'invoices');

        $this->publishes([
            __DIR__.'/Templates'           => resource_path('views/vendor/invoices'),
            __DIR__.'/Config/invoices.php' => config_path('invoices.php'),
        ], 'invoices');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/invoices.php', 'invoices'
        );
    }
}
