<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World!</title>
</head>

<body>
    <h1>Hello World!</h1>

    @php
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8];
    @endphp

    @foreach ($numbers as $number)
        <p>{{ $number }}</p>
    @endforeach

    <a href="{{ url('/list') }}">LINK</a>


</body>

</html>
