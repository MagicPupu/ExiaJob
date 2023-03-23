<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class CandidateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user = [];
    public $offer = [];

    /**
     * Create a new message instance.
     */
    public function __construct($user, $offer)
    {
        $this->user = $user;
        $this->offer = $offer;

    }

    // /**
    //  * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Candidate Mail',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }

    
    public function build() {

        $user = Auth::user();

        return $this->from($user->mail)
                    ->subject('Candidature')
                    ->view('pages.emails.mail')
                    ->attach(public_path('images/cv/'.$user->cv));
    }
}
