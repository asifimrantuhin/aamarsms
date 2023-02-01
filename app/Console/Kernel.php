<?php

namespace App\Console;

use App\Console\Commands\SMSSender;
use App\Http\Controllers\HomeController;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call([HomeController::class, 'smsSending'])->everyMinute();
        
        //$schedule->call([HomeController::class, 'smsSending'])->everyMinute();
        // $schedule->call([HomeController::class, 'smsSending']);
        // $schedule->call([HomeController::class, 'smsSending']);

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
