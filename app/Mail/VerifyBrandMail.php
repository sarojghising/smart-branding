<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyBrandMail extends Mailable
{
    use Queueable, SerializesModels;

    public $brand;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($brand)
    {
         $this->brand = $brand;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.verifyBrand');
    }
}
