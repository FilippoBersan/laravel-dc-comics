<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Elenco Comicst</title>
</head>
<body>
  <h1>Comics</h1>
  <ul>
    @foreach ($comicses as $comic)
        <li> {{$comic->title}} - {{$comic->id}} - <a href="{{route('comicses.show' , $comic->id)}}">view details</a> </li>
    @endforeach
  </ul>
  
</body>
</html>