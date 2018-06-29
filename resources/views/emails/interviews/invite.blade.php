@component('mail::message')
# Congratulations {{$user->first_name}},

You have been invited for an interview with {{config('app.owner')}} for the post of {{$job->title}}. You'll find details of the interview below:

<ul>
    <li>Type: <b>{{$interview->type}}</b></li>
    <li>Due date: <b>{{$interview->due_date}}</b></li>
    <li>Location: <b>{{$interview->address}}</b></li>
</ul>

We wish you a successful interview.

@component('mail::button', ['url' => '/'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
