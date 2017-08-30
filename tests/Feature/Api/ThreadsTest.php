<?php

namespace Tests\Feature\Api;

use Tests\TestCase;

class ThreadsTest extends TestCase
{
    /** @test */
    public function it_can_return_some_threads()
    {
        $this->get('/api/threads')
            ->assertJson([
                [
                    'id' => 1,
                    'subject' => 'Test Thread',
                    'body' => 'Test foo',
                ],
            ]);
    }
}
