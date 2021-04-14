<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
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


    public function test_password_change()
    {
        $user = new User();
        $user->username = 'Robot Test';
        $user->email = 'Robot@test.se';
        $user->password = Hash::make('password');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->actingAs($user)
            ->post('/editprofile/ ' . $user->id . ' /', [
                'password' => 'passpass',
                'password_confirmation' => 'passpass'
            ]);

        $response->assertSeeText('Your profile has been updated.');
    }
}
