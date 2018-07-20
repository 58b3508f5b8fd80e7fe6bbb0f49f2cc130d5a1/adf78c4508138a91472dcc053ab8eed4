@component('mail::message')
# Congratulations {{$user->first_name}}

You have passed the interview for "{{$job->title}}".

You will be required to complete the trainings in our Learning Management System (LMS)

Click the button below to start learning

@component('mail::button', ['url' => url('/learning')])
Start Learning
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
