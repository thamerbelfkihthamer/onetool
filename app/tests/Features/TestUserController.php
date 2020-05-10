<?php

namespace Tests\Features;

use CodeIgniter\Test\FeatureTestCase;
use CodeIgniter\Test\ControllerTester;

class TestUserController extends FeatureTestCase
{
    use ControllerTester;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /** @test */
    public function  show_users()
    {
        //$response = $this->call('get', site_url('users'));

        //var_dump($response);die();

        $this->assertTrue(true);
    }

}
