<?php

namespace App\Http\Controllers;

use Analytics;
use Vinkla\Instagram\Instagram;
use Spatie\Analytics\Period;

class DashboardController extends Controller
{

    public function index()
    {


//        $instagram = new Instagram('13684019694.1677ed0.89eea486370d4e30a110880b467990f0');
//
//        dd($instagram->self());

        return view('dashboard')->with([
            'pusherKey' => config('broadcasting.connections.pusher.key'),
            'clientConnectionPath' => '',
            'environment' => app()->environment(),
        ]);
    }
}
