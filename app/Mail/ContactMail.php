<?php

 
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phonenumber;
    public $messageContent;

    public function __construct($name, $email,$phonenumber, $messageContent)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phonenumber = $phonenumber;
        $this->messageContent = $messageContent;
    }

    public function build()
    {
        return $this->subject('New Contact Form Submission')
                    ->view('emails.contact');
    }
}
