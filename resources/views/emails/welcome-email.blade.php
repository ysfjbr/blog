@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent
This post : {{ $data["title"] }} is changed!!
{{ $data["desc"] }}
Thanks,<br>
{{ config('app.name') }}
@endcomponent
