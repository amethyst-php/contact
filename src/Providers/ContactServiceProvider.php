<?php

namespace Railken\Amethyst\Providers;

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
            return $this->createMacroMorphRelation(\Railken\Amethyst\Models\Contact::class, 'contacts', 'contactable');
        });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Railken\Amethyst\Providers\TaxonomyServiceProvider::class);

        Config::push('amethyst.taxonomy.data.taxonomy.seeds', ['name' => Config::get('amethyst.contact.data.contact.attributes.type.vocabulary')]);
    }
}
