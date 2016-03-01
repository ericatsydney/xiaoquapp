<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * Test the login submit button.
     */
//    public function testLoginSubmit()
//    {
//        $this->visit('/auth/login')
//            ->type('eric.g.x.tan@gmail.com','email')
//            ->type('123456','password')
//            ->press('登录')
//            ->seePageIs('/admin');
//    }

    /**
     * Test the admin page visiting (authenticate).
     */
    public function testAdminPage()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/admin')
            ->see('小区管理应用后台');
    }

    /**
     * Test the register page wording.
     */
    public function testRegisterInit()
    {
        $this->visit('/auth/register')
            ->see('创建');
    }

//
//    /**
//     * Test the login page wording.
//     */
//    public function testLoginInit()
//    {
//        $this->visit('/')
//            ->see('登陆');
//    }
}
