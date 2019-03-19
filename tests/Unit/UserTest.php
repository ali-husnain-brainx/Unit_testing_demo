<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testThatWeCanGetFirstName(){

        $user = new User();
        $user->setFirstName('Ali');

        $this->assertEquals($user->getFirstName(), 'Ali');
    }

    public function testThatWeCanGetLastName(){

        $user = new User();
        $user->setLastName('husnain');

        $this->assertEquals($user->getLastName(), 'husnain');
    }

    public function testFullNameIsReturned(){

        $user = new User();
        $user->setFirstName('Ali');
        $user->setLastName('husnain');

        $this->assertEquals($user->getFullName(), 'Ali husnain');
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $user = new User();
        $user->setFirstName('Ali');
        $user->setLastName('husnain');
        $user->setEmail('ali.husnain@brainxtech.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'Ali husnain');
        $this->assertEquals($emailVariables['email'], 'ali.husnain@brainxtech.com');
    }
}
