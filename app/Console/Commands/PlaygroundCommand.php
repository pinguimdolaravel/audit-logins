<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PlaygroundCommand extends Command
{
    protected $signature = 'playground';

    protected $description = 'Command description';

    public function handle(): void
    {
            session()->setId('bp4jJaA2P6TuTWYBbo3TtkMKMiYWOc4ZoQ04yGEl');
            session()->invalidate();
    }
}
