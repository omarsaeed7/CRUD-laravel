<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body{
                background: #111;
                color: #fff;
            }
        </style>
    </head>
    <body>
        {{-- using Mostage Template --}}
        <h1>Hello {{$name . " ". $age}}</h1>
        <h1>{{var_dump($books)}}{{$books[0]}}</h1>
        {{-- using blade template to use foreach --}}
        @foreach($books as $book)
            <h2> {{$book}}</h2>
        @endforeach
    </body>
</html>