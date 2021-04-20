<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailThankYouForYourEnquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $contactUs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactUs)
    {
        //
        $this->contactUs = $contactUs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.markdown-thank-you-for-your-enquiry')
            ->cc('info@matesworkforce.com.au', 'Mates Workforce')
            ->replyTo('info@matesworkforce.com.au', 'Mates Workforce')
            ->subject('Thank You For Your Enquiry')
            ;
    }
}
