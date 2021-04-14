<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;


    public function testViewLoginForm()
    {
        $response = $this->get('/login');
        $response->assertSuccessful();
        $response->assertSeeText('Welcome back!');
    }

    public function testLoginUser()
    {
        $user = new User();
        $user->username = 'Robot Test';
        $user->email = 'Robot@test.se';
        $user->password = Hash::make('password');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'Robot@test.se',
                'password' => 'password'
            ]);

        $response->assertStatus(200);
    }

    public function testInvalidLoginDetails()
    {
        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'invalid@invalid.com',
                'password' => 'invalid',
            ]);
        $response->assertDontSeeText('Welcome');
    }

    public function testLogoutUser()
    {
        $user = new User();
        $user->username = 'Robot Test';
        $user->email = 'Robot@test.se';
        $user->password = Hash::make('password');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->get('/logout');

        $response->assertViewIs('auth.login');
    }
}
