@component('mail::message')
# Congratulations {{$user->first_name}},

You have been invited for an interview with {{config('app.owner')}} for the post of {{$job->title}}. You'll find details of the interview below


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent