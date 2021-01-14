<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriberMail extends Mailable
{
    use Queueable, SerializesModels;

    public $dear;
    public $ok;

    /**
     * Create a new message instance.
     *
     * @param $dear
     */
    public function __construct($dear,$ok)
    {
        //
        $this->dear = $dear;
        $this->ok = $ok;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.sub');
    }
}
