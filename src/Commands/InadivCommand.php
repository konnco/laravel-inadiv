<?php

namespace Konnco\Inadiv\Commands;

use Illuminate\Console\Command;

class InadivCommand extends Command
{
    public $signature = 'laravel-inadiv';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
