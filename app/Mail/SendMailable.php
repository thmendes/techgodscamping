<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $contentMessage;

    /**
     * Create a new contentMessage instance.
     *
     * @return void
     */
    public function __construct($name, $email, $contentMessage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->contentMessage = $contentMessage;
    }

    /**
     * Build the contentMessage.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('message', [
            'name' => $this->name, 
            'email' => $this->email,
            'contentMessage' => $this->contentMessage
        ]);        

    }
}
