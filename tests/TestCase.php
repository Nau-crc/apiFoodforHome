<?php

namespace Tests;

use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseMigrations;

    protected $faker;

    public function __construct()
    {
        parent::setUp();
        $this->faker = Factory::create();
        
    } 
}
