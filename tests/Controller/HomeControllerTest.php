<?php


namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    public function testShowPost(){
        $client = static::createClient();
        $client->request('GET','/home');
        $this->assertEquals(200,$client->getResponse()->getStatusCode());
    }
}