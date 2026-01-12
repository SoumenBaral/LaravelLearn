<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1>Hello {{$name}}</h1>
    <p>Welcome to our website!</p>
    <p>His age is {{$age}}</p>
    <div>
        @foreach($planets as $planet)
            @if($loop->index==2)
                <p style="color:red">{{$loop->index+1}}.  {{$planet}}</p>
            @else
            <p>{{$loop->index+1}}.  {{$planet}}</p>
            @endif
        @endforeach

    </div>
</body>
</html>
