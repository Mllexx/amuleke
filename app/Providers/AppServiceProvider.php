<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer(['layout', 'errors/404'], function ($view) {
            if ($view['response_code'] == '404') {
                $entry = GlobalSet::find('configuration')->inCurrentSite()->error_404_entry;
                if(!$entry) {
                    $entry = GlobalSet::find('configuration')->inDefaultSite()->error_404_entry;
                }
                $view->with($entry->toAugmentedArray());
            }
        });
    }
}
