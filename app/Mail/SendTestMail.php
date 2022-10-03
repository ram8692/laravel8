<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
//php  artisan make:mail SendTestMail
class SendTestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->name = 'the test coder';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emailTempFile');
    }
}
