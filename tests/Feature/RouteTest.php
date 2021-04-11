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

     public function test_all_routes()
     {
        $urls = [
            '/',
            '/login',
            '/signup',
        ];

        foreach($urls as $url){
            $response = $this->get($url);
            if($response->assertStatus(200)){
                $this->assertTrue(true);
            }else{
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

        foreach($urls_logged_in as $url){
            $response = $this->actingAs($user)->get($url);
            if($response->assertStatus(200)){
                $this->assertTrue(true);
            }else{
                $this->assertTrue(false);
            }
        }



     }

}
