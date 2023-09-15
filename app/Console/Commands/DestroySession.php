<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Session;

class DestroySession extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:destroy-session {session}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $session = $this->argument('session');

        $this->warn("Session: $session");

        Session::setId($session);
        Session::start();
        Session::flush();
        Session::invalidate();

        $this->info('Session destroyed');
    }
}
