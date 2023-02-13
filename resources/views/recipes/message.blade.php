<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')
    <div id="content">
        <h1>Message Type: {{$type_of_message}}</h1>
        <h2 class="message">{{$message}}</h2>
    </div>
</body>

</html>