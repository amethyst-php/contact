<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\ContactsController::class,
    'router'     => [
        'as'     => 'contact.',
        'prefix' => '/contacts',
    ],
];
