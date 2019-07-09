<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\ContactsController::class,
    'router'     => [
        'as'     => 'contact.',
        'prefix' => '/contacts',
    ],
];
