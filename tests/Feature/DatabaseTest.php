<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    protected $seed = true;

    public function test_database_recieves_info()
    {
        $this->seed();
    }


    
}
