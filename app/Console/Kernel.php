<?php

namespace App\Console;

use App\Console\Components\Google\FetchGoogleAnalyticsCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected function schedule(Schedule $schedule)
    {
         $schedule->command(FetchGoogleAnalyticsCommand::class)->everyMinute();
    }

    protected function commands()
    {
        $commandDirectories = glob(app_path('Console/Components/*'), GLOB_ONLYDIR);
        $commandDirectories[] = app_path('Console');
        collect($commandDirectories)->each(function (string $commandDirectory) {
            $this->load($commandDirectory);
        });
    }
}
