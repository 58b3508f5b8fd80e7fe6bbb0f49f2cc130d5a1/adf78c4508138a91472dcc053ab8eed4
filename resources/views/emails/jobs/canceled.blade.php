@component('mail::message')
# Hello {{$user->first_name}}

We've noticed that you canceled your application for {{$job->title}}.

You can still search our database for more openings.

@component('mail::button', ['url' => url('/openings')])
Openings
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
