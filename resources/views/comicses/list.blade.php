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
  <a href="{{route('comicses.create')}}">Crea nuovo Comic</a>
   
  <ul>
    @foreach ($comicses as $comic)
        <li> {{$comic->title}} - {{$comic->id}} - <a href="{{route('comicses.show' , $comic->id)}}">view details</a>  ---
         <a href="{{route('comicses.edit' , $comic->id)}}" alt="Comic">Aggiorna Comic</a>
        
        <form action="{{route('comicses.destroy' ,  $comic->id) }}" method="POST">
        @csrf


@method('DELETE')
        
        <input type="submit" value="Cancella">
        
        </form>

        
        </li>




    @endforeach
  </ul>
  
</body>
</html>