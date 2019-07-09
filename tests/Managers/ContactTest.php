<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\ContactFaker;
use Amethyst\Managers\ContactManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class ContactTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = ContactManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ContactFaker::class;
}
