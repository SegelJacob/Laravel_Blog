<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function itCanPerformABasicRequest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);


    }


}
