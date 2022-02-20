<?php

namespace Tests\Feature;

use Tests\TestCase;

class BlogPostTest extends TestCase
{

    public function test_the_application_returns_a_successful_response_for_first_loaf_post()
    {
        $value = 'Your first loaf';
        $response = $this->get('/posts/first_loaf');

        $response->assertStatus(200);
        $response->assertSeeText($value, $escaped = true);
    }

    public function test_the_application_returns_a_successful_response_for_feed_starter()
    {
        $value = 'How to feed your sourdough starter';
        $response = $this->get('/posts/feed_starter');

        $response->assertStatus(200);
        $response->assertSeeText($value, $escaped = true);
    }

    public function test_the_application_returns_a_successful_response_for_basics()
    {
        $value = 'Sourdough Basics';
        $response = $this->get('/posts/basics');

        $response->assertStatus(200);
        $response->assertSeeText($value, $escaped = true);
    }

    public function test_the_application_returns_an_error_response_for_post_that_does_not_exist()
    {
        $this->get('/posts/foo')
            ->assertStatus(404);
    }
}
