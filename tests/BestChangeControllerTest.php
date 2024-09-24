<?php

namespace App\Tests;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BestChangeControllerTest extends WebTestCase
{
    public function testSomething(): void
    {
        $expectedMessage = 'Dealing with a chronic health condition like diabetes can make it hard to keep up with your responsibilities. Your recent efforts to participate in the DPP or take metformin can put you in the best position to be able to fulfill your commitments';
        
        $parameters = [
            'event' => 1,
            'timing' => 16,
            'big2' => 'Complete',
            'engagement' => 'Reduced',
            'confidence' => 'no recent data',
            'value1' => 'responsible'
         ];
         
         $client = static::createClient();
         $client->request('GET', '/best-change', $parameters);
         
         $response = $client->getResponse();
         $this->assertEquals($expectedMessage, $response->getContent());
    }
}
