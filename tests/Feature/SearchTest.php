<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchTest extends TestCase
{
    use RefreshDatabase;

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
        ->post('/search', [
            'search' => 'Vodka,gin',
        ]);

        $response->assertSeeText('Army special');
    }
}
