<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    public const CMD_SYS_GET_TELEGRAM_INFO = 'admin:sys:get-telegram-info';
    public const SCHEDULE_BACKUP_NO_NOTIFY = 'backup:run --disable-notifications';
    public const SCHEDULE_BACKUP_NOTIFY = 'backup:run';

    /**
     * Define the application's command schedule.
     *
     * @param Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        if (config('backup.backup.enable')) {
            $command = self::SCHEDULE_BACKUP_NO_NOTIFY;
            if (config('backup.backup.enable_notify')) {
                $command = self::SCHEDULE_BACKUP_NOTIFY;
            }//end if

            $schedule->command($command)->dailyAt('10:00')->runInBackground();
            $schedule->command($command)->dailyAt('22:00')->runInBackground();
        }//end if
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
