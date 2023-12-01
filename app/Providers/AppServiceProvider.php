<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;
use App\Models\Listing;
use Illuminate\Support\Facades\Cache;
use View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        $common_settings = Cache::get('settings', function () {
            $data = [];
            if (Schema::hasTable('settings')) {
                $settings = Setting::all();

                foreach ($settings as $setting) {
                    $data[$setting->code] = $setting->value_text;
                }
            }

            return $data;
        });

        if(request()->get('utm_source'))
        {
            session()->put('utm_source', request()->get('utm_source'));
        }
        
        if(request()->get('utm_medium'))
        {
            session()->put('utm_medium', request()->get('utm_medium'));
        }
        
        if(request()->get('utm_campaign'))
        {
            session()->put('utm_campaign', request()->get('utm_campaign'));
        }
        
        if(request()->get('gclid'))
        {
            session()->put('gclid', request()->get('gclid'));
        }

        View::composer('ui.common.footer', function ($view){
            $footer_listings =Listing::find(1); 
            $view->with('footer_listings',$footer_listings->list);
        });
        
        view()->share(['common_settings' => $common_settings]);

    }
}
