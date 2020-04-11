<?php

namespace App\Console;

use App\Tip;
use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            // fetch a random row
            $randomTip = Tip::where('active', 0)->inRandomOrder()->first();

            // update all rows to inactive
            Tip::where('active', 1)->update(['active' => 0]);

            // set new random tip
            $randomTip->active = 1;
            $randomTip->save();
        })->everyMinute();
    }
}
