<?php

namespace Tests\Feature\Api;

use Tests\TestCase;

class ThreadsTest extends TestCase
{
    /** @test */
    public function it_can_retrieve_threads()
    {
        $this->get('/api/threads')
            ->assertJson([
                [
                    'subject' => 'Test',
                    'body' => 'Thread.'
                ]
            ]);
    }
}
