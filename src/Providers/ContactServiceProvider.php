<?php

namespace Amethyst\Providers;

use Illuminate\Support\Facades\Config;
use Amethyst\Common\CommonServiceProvider;

class ContactServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Amethyst\Providers\TaxonomyServiceProvider::class);

        app('amethyst.taxonomy')->add('contact.type', Config::get('amethyst.contact.data.contact.attributes.type.vocabulary'), [
            'phone',
            'email',
            'fax',
            'website',
        ]);
    }
}
