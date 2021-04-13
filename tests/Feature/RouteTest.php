<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    use RefreshDatabase;


    public function test_create_user()
    {
        $user = new User();
        $user->username = 'Robot Test';
        $user->email = 'Robot@test.se';
        $user->password = Hash::make('password');
        $user->save();

        $response = $this
         ->assertDatabaseHas('users', ['email' => 'Robot@test.se']);
    }

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

    public function test_login_failed()
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


    public function test_all_routes()
    {
        $urls = [
            '/',
            '/login',
            '/signup',
        ];

        foreach ($urls as $url) {
            $response = $this->get($url);
            if ($response->assertStatus(200)) {
                $this->assertTrue(true);
            } else {
                $this->assertTrue(false);
            }
        }

        $urls_logged_in = [
            '/profile',
            '/viewRecipe/11000',
        ];


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

        foreach ($urls_logged_in as $url) {
            $response = $this->actingAs($user)->get($url);
            if ($response->assertStatus(200)) {
                $this->assertTrue(true);
            } else {
                $this->assertTrue(false);
            }
        }
    }

    public function test_search_for_drink_recipe()
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

        $response = $this
        ->post('search', [
            'search' => 'Vodka,gin',
        ]);



        if ($response->assertStatus(200)) {
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }
    }

    // public function test_add_and_remove_recipe()
    // {
    //     $user = new User();
    //     $user->username = 'Robot Test';
    //     $user->email = 'Robot@test.se';
    //     $user->password = Hash::make('password');
    //     $user->save();

    //     $response = $this
    //     ->followingRedirects()
    //     ->post('login', [
    //         'email' => 'Robot@test.se',
    //         'password' => 'password'
    //     ]);

    //     $response = $this
    //     ->post('addFavorite');
    //     $response->assertStatus(200);

    // }
}
