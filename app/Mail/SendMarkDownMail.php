<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Member;
//php  artisan make:mail SendMarkDownMail --markdown=emails.markdown
class SendMarkDownMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public Member $member;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Member $member)
    {
        //
        $this->name = 'the test coder';
        $this->member = $member;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //if we are using private or protected then we have to sue with property
//return $this->markdown('emails.markdown')->with;
        return $this->markdown('emails.markdown');
    }
}
