<?php

namespace App\Http\Controllers;

use Analytics;
use Vinkla\Instagram\Instagram;
use Spatie\Analytics\Period;

class DataController
{

    public function googleAnalytics()
    {
        $analyticsData = Analytics::performQuery(
            Period::months(1),
            'ga:sessions',
            [
                'metrics' => 'ga:sessions, ga:pageviews, ga:sessionDuration',
                'dimensions' => 'ga:yearMonth'
            ]
        );

        return json_encode($analyticsData);
    }

    public function instagram()
    {
        $instagram = new Instagram('13684019694.1677ed0.ec3784f45f064fbcacb5280fa5e1d62e');

//        dd($instagram->self());

        return json_encode($instagram->self());
    }
}
