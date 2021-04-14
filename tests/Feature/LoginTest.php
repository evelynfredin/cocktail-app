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


    public function test_view_login_form()
    {
        $response = $this->get('/login');
        $response->assertSuccessful();
        $response->assertSeeText('Welcome back!');
    }

    public function test_login_user()
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

    public function test_invalid_login_details()
    {
        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'invalid@invalid.com',
                'password' => 'invalid',
            ]);
        $response->assertDontSeeText('Welcome');
    }

    public function test_logout_user()
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
