<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoRecibido extends Mailable
{
    use Queueable, SerializesModels;

    private $fromFullName;
    private $message;
    private $contactTel;
    private $motivoConsulta;
    private $tiposContacto;

    /**
     * Create a new message instance.
     *
     * @param $fromFullName
     * @param $message
     * @param $contactTel
     * @param $motivoConsulta
     * @param $tiposContacto
     */
    public function __construct($fromFullName, $message, $contactTel, $motivoConsulta, $tiposContacto)
    {
        $this->fromFullName = $fromFullName;
        $this->message = $message;
        $this->contactTel = $contactTel;
        $this->motivoConsulta = $motivoConsulta;
        $this->tiposContacto = $tiposContacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contacto recibido desde la web EJI Villarreal')
            ->view('emails.mailContacto')
            ->with([
                'fullName' => $this->fromFullName,
                'contactTel' => $this->contactTel ? $this->contactTel : 'Sin telefono',
                'motivoConsulta' => $this->motivoConsulta,
                'tiposContacto' => $this->tiposContacto,
                'body' => $this->message
            ]);
    }
}
