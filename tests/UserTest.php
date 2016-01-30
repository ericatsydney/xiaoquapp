<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * Test home page visiting.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/')
          ->see('小区')
          ->dontSee('Rails');
    }

    /**
     * Test the admin page visiting.
     */
    public function testAdminPage()
    {
        $this->visit('/admin')
            ->see('authority');
    }

    /**
     * Test the register page wording.
     */
    public function testRegisterInit()
    {
        $this->visit('/')
            ->see('注册');
    }


    /**
     * Test the login page wording.
     */
    public function testLoginInit()
    {
        $this->visit('/')
            ->see('登陆');
    }


    /**
     * Test the login submit button.
     */
    public function testLoginSubmit()
    {
        $this->visit('/')
            ->see('登陆');
    }
}
