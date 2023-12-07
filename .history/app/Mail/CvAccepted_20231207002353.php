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

    public $jobApplication;


    /**
     * Create a new message instance.
     */
    public function __construct($jobApplication)
    {
        $this->jobApplication = $jobApplication;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Interview Invitation - [Job Title] at [Company Name]'
        );
    }

    /**
     * Get the message envelope.
     * @param string $jobTitle The job title.
     * @param string $companyName The company name.
     * @return Envelope
     */
    public function envelope(string $jobTitle, string $companyName): Envelope
    {
        return new Envelope(
            subject: "Interview Invitation - $jobTitle at $companyName"
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
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
