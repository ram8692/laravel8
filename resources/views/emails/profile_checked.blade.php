@component('mail::message')
Hi {{$member->name}}

some one checked your profile

@component('mail::button', ['url' => 'http://pracltwo.localhost/'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent