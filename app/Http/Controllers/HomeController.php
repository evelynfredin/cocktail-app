<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {

        $mostPopular = cocktailApiCall('popular.php');
        $latest = cocktailApiCall('latest.php');

        if (count($mostPopular['drinks']) > 15) {
            for ($x = 14; $x <= count($mostPopular['drinks']); $x++) {
                unset($mostPopular['drinks'][$x]);
            }
        }

        $user = Auth::user();

        return view('index', [
            'user' => $user,
            'popularDrinks' => $mostPopular,
            'latestDrinks' => $latest,
            'visible' => 16
        ]);
    }
}
