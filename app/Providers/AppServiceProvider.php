<?php

namespace App\Providers;

use App\Models\Admin\Category;
use App\Models\Admin\Contactus;
use App\Models\Admin\Setting;
use App\Models\Admin\SocialMedia;
use Illuminate\Support\ServiceProvider;

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
              //Retrieve settings data from database or cache
              $settings = Setting::first(); 
              $contact  = Contactus::first();
              $social   = SocialMedia::first();
              $nestedCategories = Category::with('children')->where('parent_id' , null)->where('type' , '0')->get();
              \View::share(['settings' => $settings , 'contact'=>$contact , 'social'=>$social , 'nestedCategories' => $nestedCategories]);

    }
}