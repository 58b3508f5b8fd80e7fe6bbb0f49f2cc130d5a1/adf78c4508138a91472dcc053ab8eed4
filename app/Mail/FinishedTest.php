<?php

namespace App\Mail;

use App\Online_test;
use App\Result;
use App\Test;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FinishedTest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $id;

    public function __construct($id)
    {
        //
        $result = Result::find($id);
        $this->test = Online_test::where('test_id', $result->test_id)->value('title');
    }

    /**
     * Build the message.
     *--
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.tests.finished')->with([
            'test' => $this->test
        ]);
    }
}
