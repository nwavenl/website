<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OfferteMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $title = null;
        if ($this->data['type'] === 'webshop') {
            $title = 'Webshop offerte';
        } elseif ($this->data['type'] === 'website') {
            $title = 'Website offerte';
        } elseif ($this->data['type'] === 'maintenance') {
            $title = 'Maintenance offerte';
        }

        return
            $this
                ->view('offerte.contact', ['data' => $this->data])
                ->subject($title)
                ->from('contact@nwave.nl', 'Offerte formulier');
    }
}
