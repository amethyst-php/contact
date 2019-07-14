<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Contact                 newEntity()
 * @method \Amethyst\Schemas\ContactSchema          getSchema()
 * @method \Amethyst\Repositories\ContactRepository getRepository()
 * @method \Amethyst\Serializers\ContactSerializer  getSerializer()
 * @method \Amethyst\Validators\ContactValidator    getValidator()
 * @method \Amethyst\Authorizers\ContactAuthorizer  getAuthorizer()
 */
class ContactManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.contact.data.contact';
}
