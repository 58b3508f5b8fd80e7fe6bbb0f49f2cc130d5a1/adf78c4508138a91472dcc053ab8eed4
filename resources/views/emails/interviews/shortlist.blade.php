@component('mail::message')
# Congratulations <strong>{{$user}}</strong>,

Your application for the post of
<strong>{{$job->job_title}}</strong> has been reviewed, and you have been shortlisted to take an online test on
<strong>{{$job->test_title}}</strong>.

You are expected to finish this test on or before <strong>{{date_format(date_add(date_create($job->created_at),date_interval_create_from_date_string('14 days')), 'jS M, Y')}}</strong>

Click the link below to proceed with your test..

@component('mail::button', ['url' => "jobs/test/$job->application_id"])
    Start Test
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
