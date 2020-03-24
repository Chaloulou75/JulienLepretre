<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessagesCreated extends Mailable
{
    use Queueable, SerializesModels;


    public $apellidos;
    public $nombre;
    public $email;
    public $birthdate;       
    public $trabajo;
    public $deportes;
    public $objetivos;
    public $msg; 
    public $altura;
    public $peso;
    public $forma;
    public $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($apellidos, $nombre, $email, $birthdate, $trabajo, $deportes, $objetivos, $msg, $altura, $peso, $forma, $phone)
    {
        $this->apellidos= $apellidos;
        $this->nombre= $nombre;
        $this->email= $email;
        $this->birthdate= $birthdate;                
        $this->trabajo= $trabajo;
        $this->deportes= $deportes;
        $this->objetivos= $objetivos;
        $this->msg= $msg;
        $this->altura= $altura;
        $this->peso= $peso;
        $this->forma= $forma;
        $this->phone= $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.created');
    }
}
