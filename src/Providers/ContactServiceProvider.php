<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Common\CommonServiceProvider;

class ContactServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();

        \Illuminate\Database\Eloquent\Builder::macro('contacts', function (): MorphMany {
            return app('amethyst')->createMacroMorphRelation($this, \Railken\Amethyst\Models\Contact::class, 'contacts', 'contactable');
        });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Railken\Amethyst\Providers\TaxonomyServiceProvider::class);

        app('amethyst.taxonomy')->add('contact.type', Config::get('amethyst.contact.data.contact.attributes.type.vocabulary'), [
            'phone',
            'email',
            'fax',
            'website',
        ]);
    }
}
