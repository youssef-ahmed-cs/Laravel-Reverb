<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('change:progress {--progress=}')]
#[Description('Command description')]
class ChangeProgress extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
       $progress = $this->option('progress');
       broadcast(new \App\Events\ChangeProgressValue($progress));
    }
}
