<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class CvAccepted extends Mailable
{
    use Queueable, SerializesModels;

    public $jobApplicationData;
    public $jobT;
    public $jobC;



    /**
     * Create a new message instance.
     */
    public function __construct($jobApplicationData, $jobT, $jobC)
    {
        $this->jobApplicationData = $jobApplicationData;
        $this->jobT = $jobT;
        $this->jobC = $jobC;
    }

    /**
     * Get the message envelope.
     */
    public function envelope($jobT, $jobC): Envelope
    {
        $subject = 'Interview Invitation - ' . $jobT . ' at ' . $jobC;
        return new Envelope(subject: $subject);

    }


    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.CvAcceptedMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
