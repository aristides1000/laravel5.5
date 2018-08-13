<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/duilio/silence')
                ->assertStatus()
    }
    
    function it_welcomes_users_without_nickname()
    {
        
    }
}
