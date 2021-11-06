<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ProgressBarTest extends Command
{
    protected $signature = 'test:progress-bar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Test program to learn about Laravel progress bar";

    public function handle()
    {
        $max = 1000;

        $bar = $this->output->createProgressBar($max);
        $this->output->info('[laravel-app] Starting...');
        $bar->start();

        for ($i = 0; $i < $max; $i++) {
            usleep(12300); // 0.0123 seconds
            $bar->advance();
        }

        $this->output->info('[laravel-app] Woohoo! We have finished our progress!');
    }
}
