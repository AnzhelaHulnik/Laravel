<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $feedback;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->feedback = $feedback;
    }

    /**
     * Build the message.
     *
     * @return $this`
     */
    public function build()
    {
        return $this->view('mails.feedback')
            ->with([
                'title' => $this->feedback['title'],
                'content' => $this->feedback['content'],
            ]);
    }
}
