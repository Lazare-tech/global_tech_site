<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // tableau des données du formulaire

    public function __construct(Contact $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject($this->data['objet'])
            ->view('emails.contact_notification')
            ->with(['data' => $this->data]);
    }
}
