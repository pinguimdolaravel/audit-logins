<?php

namespace App\Listeners;

class BrincandoListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        ray($event);
    }
}
