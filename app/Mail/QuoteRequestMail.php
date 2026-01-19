<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue; // Bu satır kalabilir ama aşağıda implement etmeyeceğiz.
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

// DİKKAT: Burada 'implements ShouldQueue' OLMAMALI.
class QuoteRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function build()
    {
        return $this->subject('Yeni Teklif Talebi Var! - #' . $this->order->id)
                    ->view('emails.quote');
    }
}
