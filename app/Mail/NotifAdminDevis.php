<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifAdminDevis extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $service;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $service, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->service = $service;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('manager@lagence-com.com')
                    ->subject('Nv Devis')
                    ->markdown('emails.admin.devis')
        ;
    }
}
