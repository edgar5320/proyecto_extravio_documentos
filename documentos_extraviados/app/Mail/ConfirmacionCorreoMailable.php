<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConfirmacionCorreoMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $nombre,$apellidos,$correo,$telefono,$nombre_objeto,$descripcion_objeto,$lugar_extravio,$fecha_extravio,$descripcion_echos;


    /**
     * Create a new message instance.
     */
    public function __construct($nombre,$apellidos,$correo,$telefono,$nombre_objeto,$descripcion_objeto,$lugar_extravio,$fecha_extravio,$descripcion_echos)
    {
       $this->nombre=$nombre;
       $this->apellidos=$apellidos;
       $this->correo=$correo;
       $this->telefono=$telefono;
       $this->nombre_objeto=$nombre_objeto;
       $this->descripcion_objeto=$descripcion_objeto;
       $this->lugar_extravio=$lugar_extravio;
       $this->fecha_extravio=$fecha_extravio;
       $this->descripcion_echos=$descripcion_echos;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        
        
        return new Envelope(

            
            subject: 'Confirmacion de reporte ',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            
            view: 'emails.confirmacion',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        
        return [];
    }

    public function build(){
        $nombre = "Prueba nombre";
        return $this-> view('emails.confirmacion',['nombre'=>$nombre]);
    }
}
