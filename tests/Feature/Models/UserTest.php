<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class UserTest extends TestCase
{
  use RefreshDatabase;
  
  public function test_example()
  {
    User::factory()->create([
    	'email' => 'leo@leo.com'
    ]);
    
    $this->assertDatabaseHas('users', [
    	'email' => 'leo@leo.com'
    ]);
    
    $this->assertDatabaseMissing('users', [
    	'email' => 'said@leo.com'
    ]);
  }
}
