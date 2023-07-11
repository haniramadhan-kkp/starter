<?php

namespace App\Listeners;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Request;

class CreateRegistration
{
    /**
     * Create the event listener.
     */

    public $user; 
    public $request;

    public function __construct(User $user, Request $request)
    {
        $this->user = $user;
        $this->request = $request;
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        $registration = new Registration();
        $registration->user_id = $event->user->id;
        $registration->save();

    }
}
