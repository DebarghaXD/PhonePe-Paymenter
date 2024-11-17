<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use App\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class PaymentSuccessful extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $order;
    public $invoice;
    public $amount; 
    public $transactionId; 

    public function __construct($user, $order, $amount, $invoice, $transactionId)
    {
        $this->user = $user;
        $this->order = $order;
        $this->amount = $amount;
        $this->invoice = $invoice;
        $this->transactionId = $transactionId;
    }

    public function build()
    {
        $subject = 'Payment Successful – #' . $this->invoice->id;
        return $this->subject($subject)
                    ->view('emails.payment_successful')
                    ->with([
                        'user' => $this->user,
                        'order' => $this->order,
                        'amount' => $this->amount,
                        'invoice' => $this->invoice,
                        'transactionId' => $this->transactionId,
                    ]);
    }
}
