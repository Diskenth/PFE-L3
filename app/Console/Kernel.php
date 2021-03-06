<?php

namespace App\Console;

use App\Console\Commands\CreateCalendarEvent;
use App\Console\Commands\MakePermissionCommand;
use App\Console\Commands\UpdateMediaTokenUser;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * @var array
     */
    protected $commands = [
        UpdateMediaTokenUser::class,
        CreateCalendarEvent::class,
        MakePermissionCommand::class,
    ];

    /**
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        $schedule->command('token:generate')->daily();
    }

    /**
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
