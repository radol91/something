<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    /** @test */
    public function it_returns_hello_world_message(): void
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());

        $data = \json_decode($response->getContent(), true);

        $this->assertEquals(['message' => 'My name is Tomasz and I love spending cash! :)'], $data);
    }
}
