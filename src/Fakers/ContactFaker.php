<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Illuminate\Support\Facades\Config;
use Railken\Bag;
use Railken\Lem\Faker;

class ContactFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('contactable_type', 'foo');
        $bag->set('contactable', FooFaker::make()->parameters()->toArray());
        $bag->set('type', TaxonomyFaker::make()->parameters()->toArray());
        $bag->set('type.parent.name', Config::get('amethyst.contact.data.contact.attributes.type.vocabulary'));
        $bag->set('value', 'test@test.net');

        return $bag;
    }
}
