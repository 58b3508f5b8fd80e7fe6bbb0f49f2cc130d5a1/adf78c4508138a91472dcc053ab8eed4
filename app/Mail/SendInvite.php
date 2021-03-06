<?php

namespace App\Mail;

use App\Job;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendInvite extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;

    public function __construct($user, $application, $interview)
    {
        //
        $this->user = $user;
        $this->job = Job::where('job_id', $application->job_id)->first();
        $this->interview = $interview;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("You are Invited")->markdown('emails.interviews.invite')
            ->with(['user'      => $this->user,
                    'job'       => $this->job,
                    'interview' => $this->interview
            ]);
    }
}
