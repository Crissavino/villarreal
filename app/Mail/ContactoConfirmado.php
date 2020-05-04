<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoConfirmado extends Mailable
{
    use Queueable, SerializesModels;

    private $fullName;

    /**
     * Create a new message instance.
     *
     * @param $fullName
     */
    public function __construct($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $body = 'Tu consulta fue recibidad correctamente. 
            Nos pondremos en contacto a la brevedad al telefono brindado en el formulario. 
            Muchas gracias';

        return $this->from(config('mail.from.address'))
            ->subject('Contacto confirmado con EJI Villarreal')
            ->view('emails.mailConfirmarContacto')
            ->with([
                'fullName' => $this->fullName,
                'body' => $body
            ]);
    }
}
