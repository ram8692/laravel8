<?php

namespace App\Listeners;

use App\Events\SomeoneCheckedProfile;
use App\Jobs\SendProfileCheckedMailJob;
use App\Mail\ProfileCheckedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendProfileCheckedNotification implements ShouldQueue
{
    public int $delay = 5;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SomeoneCheckedProfile  $event
     * @return void
     */
    public function handle(SomeoneCheckedProfile $event)
    {
        Mail::to($event->member->mail)->send(new ProfileCheckedMail($event->member));
    }
}
