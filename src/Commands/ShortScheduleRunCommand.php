<?php

namespace Spatie\ShortSchedule\Commands;

use Illuminate\Console\Command;
use React\EventLoop\Factory;
use React\EventLoop\Loop;
use Spatie\ShortSchedule\ShortSchedule;

class ShortScheduleRunCommand extends Command
{
    protected $signature = 'short-schedule:run {--lifetime= : The lifetime in seconds of worker}';

    protected $description = 'Run the short scheduled commands';

    public function handle()
    {
        app(ShortSchedule::class)
            ->registerCommandsFromConsoleKernel()
            ->run($this->option('lifetime'));
    }
}
