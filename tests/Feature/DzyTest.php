<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DzyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
	$response = $this->get('/');
	$response->assertStatus(200);
    }
    public function a_user_can_create_subCompany()
    {
    	$sub = factory('App\SubCompany')->create();
    	$response->assertSee($sub->name);
    }

}
