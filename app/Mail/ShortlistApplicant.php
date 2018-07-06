<?php

namespace App\Mail;

use App\Application;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShortlistApplicant extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $user;

    public function __construct($user, $application_id)
    {
        //
        $this->user = $user->first_name;
        $this->job = Application::join('jobs', 'jobs.job_id', '=',
            'applications.job_id')
            ->join('results', 'results.application_id',
                'applications.application_id')
            ->join('online_tests', 'online_tests.test_id', '=',
                'results.test_id')
            ->where('applications.application_id', $application_id)
            ->select('applications.application_id', 'jobs.title as job_title',
                'online_tests.title as test_title', 'results.created_at')->first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.interviews.shortlist')->with([
            'user' => $this->user,
            'job'  => $this->job
        ]);
    }
}
