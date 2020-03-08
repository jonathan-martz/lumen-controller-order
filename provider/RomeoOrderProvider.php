<?php
/**
 * @copyright by Jonathan Martz
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class RomeoOrderProvider
 * @package App\Providers
 */
class RomeoOrderProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
