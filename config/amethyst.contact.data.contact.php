<?php

return [
    'table'      => 'amethyst_contacts',
    'comment'    => 'Contact',
    'model'      => Railken\Amethyst\Models\Contact::class,
    'schema'     => Railken\Amethyst\Schemas\ContactSchema::class,
    'repository' => Railken\Amethyst\Repositories\ContactRepository::class,
    'serializer' => Railken\Amethyst\Serializers\ContactSerializer::class,
    'validator'  => Railken\Amethyst\Validators\ContactValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\ContactAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\ContactFaker::class,
    'manager'    => Railken\Amethyst\Managers\ContactManager::class,
    'attributes' => [
        'type' => [
            'vocabulary' => 'Contact Type',
        ],
        'contactable' => [
            'options' => [],
        ],
    ],
];
