<x-mail::message>
# Hello, you got a new message

<h3>Name: {{ $data['name'] }}</h3>
<h3>Email: {{ $data['email'] }}</h3>
<h3>Message: {{ $data['message'] }}</h3>

<x-mail::button :url="'mailto:' . $data['email'] . '?subject=Replying to your message&body=Your reply message here'">
        Reply to Email
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
