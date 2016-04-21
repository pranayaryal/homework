<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
//        $this->visit('/register')
//             ->type('pranay', 'name')
//             ->type('drpranayaryal@gmail.com', 'email')
//             ->type('08051978', 'password')
//             ->type('08051978', 'password_confirmation')
//            ->click('Register')
//            ->see('Logout')
//            ->click('Logout')
//            ->see('Login');

        $this->visit('/login')
            ->type('email@email.com', 'email')
            ->type('xxxxxx', 'password')
            ->press('Login')
            ->see('Select a Group');
//            ->seePageIs('/group/add');



    }
}
