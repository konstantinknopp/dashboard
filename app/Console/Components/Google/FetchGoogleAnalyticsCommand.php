<?php

namespace App\Console\Components\Google;

use Analytics;
use App\Events\GoogleAnalyticsFetched;
use Illuminate\Console\Command;
use Spatie\Analytics\Period;

class FetchGoogleAnalyticsCommand extends Command
{
    
    protected $signature = 'dashboard:fetch-google-analytics';

    protected $description = 'Fetch Google Analytics Data';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Fetching Google Analytics Data');
        
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        
        event(new GoogleAnalyticsFetched($analyticsData));
        
        $this->info('All done!');
    }
}
