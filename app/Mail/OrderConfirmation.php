<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $orderId;
    public $total;
    public $userAddress;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderId, $total, $userAddress)
    {
        $this->orderId = $orderId;
        $this->total = $total;
        $this->userAddress = $userAddress;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.order-confirmation')
            ->with([
                'orderId' => $this->orderId,
                'total' => $this->total,
                'userAddress' => $this->userAddress,
            ]);
    }
}
