<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloWorldTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/hello/world');

        $this->assertResponseIsSuccessful();

        $this->assertSelectorTextContains('h1', 'HelloWorldController');
    }
}
