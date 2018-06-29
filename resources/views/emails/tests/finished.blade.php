@component('mail::message')
# Hello {{Auth::user()->first_name}},

Congratulations on your completion of "{{$test}}".

The test will be reviewed shortly, and you will be contacted if successful.

@component('mail::button', ['url' => '/home'])
View Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
