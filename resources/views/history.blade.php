
@foreach ($messages as $message)
<ul>
    <li>{{ $message['user_name'] }}</li>
    <li>{{ $message['category'] }}</li>
    <li>{{ $message['content'] }}</li>
    <li>{{ $message['channel'] }}</li>
    <li>{{ $message['date'] }}</li>
</ul>
@endforeach

