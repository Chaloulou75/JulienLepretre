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
    public $msg;
    public $problema; 
    public $alivia;
    public $antecedentes;
    public $objetivos; 
    public $altura;
    public $peso;
    public $forma;
    public $phone;
    public $trabajo;
    public $deportes;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($apellidos, $nombre, $email, $birthdate, $msg, $problema, $alivia, $antecedentes, $objetivos, $altura, $peso, $forma, $phone, $trabajo, $deportes)
    {
        $this->apellidos= $apellidos;
        $this->nombre= $nombre;
        $this->email= $email;
        $this->birthdate= $birthdate;                
        $this->msg= $msg;
        $this->problema= $problema;
        $this->alivia= $alivia;
        $this->antecedentes= $antecedentes;
        $this->objetivos= $objetivos;        
        $this->altura= $altura;
        $this->peso= $peso;
        $this->forma= $forma;
        $this->phone= $phone;
        $this->trabajo= $trabajo;
        $this->deportes= $deportes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.created')
                    ->subject('Demande de consultation privée');
    }
}
