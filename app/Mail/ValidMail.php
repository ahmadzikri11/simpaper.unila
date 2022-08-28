<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ValidMail extends Mailable
{
    use Queueable, SerializesModels;
    public $value;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Mail from UPT Perpustakaan Universitas Lampung')
            ->view('emails.validMail');

        foreach ($this->value['files'] as $file) {
            $this->attach($file);
        }

        return $this;
    }
}
