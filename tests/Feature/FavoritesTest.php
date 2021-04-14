<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Favorites;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FavoritesTest extends TestCase
{
    use RefreshDatabase;


    public function testAddAndRemoveRecipe()
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
            ->post('/addfavorite/11000');

        $this->assertDatabaseHas('user_drink', [
            'user_id' => $user->id,
            'drink_id' => 11000
        ]);
    }
}
