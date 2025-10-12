<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReponseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $reponse;
    public $fichiers;

    public function __construct($reponse, $fichiers = [])
    {
        $this->reponse = $reponse;
        $this->fichiers = $fichiers;
    }

    public function build()
    {
        $email = $this->subject('Réponse à votre message')
                      ->view('emails.reponse')
                      ->with([
                          'reponse' => $this->reponse,
                      ]);

        // 🔹 Attacher tous les fichiers uploadés
        foreach ($this->fichiers as $fichier) {
            $email->attach(storage_path('app/public/' . $fichier));
        }

        return $email;
    }
}
