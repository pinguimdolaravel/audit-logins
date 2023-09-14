<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Auth\Events\Failed;
use Illuminate\Http\Request;

class FailedLoginListener
{
    /**
     * Create the event listener.
     */
    public function __construct(
        protected Request $request
    )
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Failed $event): void
    {
        /** @var User $user */
        $user = $event->user;

        if (!$user) {
            return;
        }

        $user->logins()->create([
            'ip' => $this->request->ip(),
            'browser' => browser(),
            'agent' => $this->request->userAgent(),
            'login_at' => now(),
            'login_successfully' => false,
            'location' => geoip()->getLocation($this->request->ip())->toArray(),
        ]);
    }
}
