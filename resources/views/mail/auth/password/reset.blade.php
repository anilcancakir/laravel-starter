@component('mail::message')
# {{ trans('auth.reset_password_email_subject') }}

{{ trans('auth.reset_password_email_body', ['email' => $user->email]) }}

@component('mail::button', ['url' => route('auth.password.reset', $token)])
    {{ trans('auth.reset_password') }}
@endcomponent

{{ trans('common.thanks') }},<br>
{{ config('app.name') }}
@endcomponent
