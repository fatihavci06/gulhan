<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Productcategory;
use Illuminate\Support\ServiceProvider;

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
        $navbar_product_categories = Productcategory::with('categories')->get();
        view()->share('navbar_product_categories', $navbar_product_categories);

        $contact = Contact::find(1);

        view()->share('contact', $contact);
    }
}
