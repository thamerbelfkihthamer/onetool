<?php

namespace Features;

use CodeIgniter\Test\FeatureTestCase;

class TestRegisterUserFeature extends FeatureTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /** @test */
    public function username_and_email_required()
    {
        // post request
        // assert SessionHasError email & username required
    }

    /** @test */
    public function email_should_not_be_inserted_twice()
    {
        // add user to the database
        // post request with the same email
        // assert that sessionHasError message

    }

    /** @test */
    public function register_new_user()
    {
        // acceptance use case

        // assert the user exist within the database
        // assert the redirection to users path
        // assert that an email was sent as well
    }


}
