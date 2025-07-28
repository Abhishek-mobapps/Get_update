@component('mail::message')
# Hello {{ $user->name }},

Your login credentials have been set by the administrator.

**Email:** {{ $user->email }}

**Password:** {{ $password }}

Please login here: [Login]({{ route('userlogin') }})

Thanks,<br>
{{ config('app.name') }}
@endcomponent
