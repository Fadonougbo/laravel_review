<x-mail::message>
# Introduction

The body of your message.

message de doe pour user

![ooook]({{asset('storage/pic1.jpg')}})

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
