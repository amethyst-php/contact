<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class ContactAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'contact.create',
        Tokens::PERMISSION_UPDATE => 'contact.update',
        Tokens::PERMISSION_SHOW   => 'contact.show',
        Tokens::PERMISSION_REMOVE => 'contact.remove',
    ];
}
