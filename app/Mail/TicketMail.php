<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Mime\Email;


class TicketMail extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public readonly array $data)
    {
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        $subject = "[PORTFÓLIO DISIN] - {$this->data['subject']}";
        $name = $this->data['name'];
        $email = $this->data['email'];

        return new Envelope(
            from:new Address($email, $name),
            subject: $subject,
            using: [
                function (Email $message) {
                    $headers = $message->getHeaders();
                    $headers->addTextHeader('X-OTRS-Owner', config('constants.otrs.default-owner'));
                    $headers->addTextHeader('X-OTRS-FollowUp-Owner', config('constants.otrs.followup-owner'));
                    $headers->addTextHeader('X-OTRS-Queue', config('constants.otrs.queue'));
                    $headers->addTextHeader('X-OTRS-FollowUp-Queue', config('constants.otrs.followup-queue'));
                },
            ]
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.ticket',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
