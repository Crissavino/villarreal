<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecibirContacto extends Mailable
{
    use Queueable, SerializesModels;

    private $fromFullName;
    private $message;

    /**
     * Create a new message instance.
     *
     * @param $fromFullName
     * @param $message
     */
    public function __construct($fromFullName, $message)
    {
        $this->fromFullName = $fromFullName;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'))
            ->subject('Contacto recibido')
            ->view('emails.mailContacto')
            ->with([
                'fullName' => $this->fromFullName,
                'body' => $this->message
            ]);
    }
}
