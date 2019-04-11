<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\ContactFaker;
use Railken\Amethyst\Managers\ContactManager;
use Railken\Amethyst\Tests\BaseTest;
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
