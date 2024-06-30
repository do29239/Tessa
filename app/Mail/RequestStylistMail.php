<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestStylistMail extends Mailable
{
    use Queueable, SerializesModels;

    public $requestId;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($requestId)
    {
        $this->requestId = $requestId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Stylist Request Notification')
            ->view('emails.new-request')
            ->with(['requestId' => $this->requestId]);
    }
}
