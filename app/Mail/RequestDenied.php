<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;

class RequestDenied extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @param  User  $user
     * @return void
     */
    /*public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('tessa@example.com', 'Tessa Academy'),
            subject: 'Request Denied',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.request_denied',
        );
    }*/
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('dardanosmani18@gmail.com')
            ->subject('Your Stylist Request has been Denied')
            ->view('emails.request_denied');
    }
}

