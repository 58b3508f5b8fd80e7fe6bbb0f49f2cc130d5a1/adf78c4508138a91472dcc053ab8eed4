@component('mail::message')
# Hello {{$name}}

We recieved your application for the post of {{$job}}. We will get back to you after a full review of your application.

We are glad you chose to work with us.

@component('mail::button', ['url' => '/home'])
View Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
