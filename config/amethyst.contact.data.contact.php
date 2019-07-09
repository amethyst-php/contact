<?php

return [
    'table'      => 'amethyst_contacts',
    'comment'    => 'Contact',
    'model'      => Amethyst\Models\Contact::class,
    'schema'     => Amethyst\Schemas\ContactSchema::class,
    'repository' => Amethyst\Repositories\ContactRepository::class,
    'serializer' => Amethyst\Serializers\ContactSerializer::class,
    'validator'  => Amethyst\Validators\ContactValidator::class,
    'authorizer' => Amethyst\Authorizers\ContactAuthorizer::class,
    'faker'      => Amethyst\Fakers\ContactFaker::class,
    'manager'    => Amethyst\Managers\ContactManager::class,
    'attributes' => [
        'type' => [
            'vocabulary' => 'Contact Type',
        ],
        'contactable' => [
            'options' => [],
        ],
    ],
];
