<?php

namespace Amethyst\Schemas;

use Illuminate\Support\Facades\Config;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class ContactSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\EnumAttribute::make('contactable_type', app('amethyst')->getDataNames())
                ->setRequired(true),
            Attributes\MorphToAttribute::make('contactable_id')
                ->setRelationKey('contactable_type')
                ->setRelationName('contactable')
                ->setRelations(app('amethyst')->getDataManagers())
                ->setRequired(true),
            \Amethyst\Attributes\TaxonomyAttribute::make('type_id', Config::get('amethyst.contact.data.contact.attributes.type.vocabulary'))
                ->setRelationName('type')
                ->setRequired(true),
            Attributes\TextAttribute::make('value')
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
