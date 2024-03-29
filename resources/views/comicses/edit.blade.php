<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <title>Modifica Comic</title>
</head>
<body>
  <div class="container">
  <h1>Modifica comic : {{$comic->title}}</h1>
  <a href="{{route('comicses.index')}}">Torna alla lista comics</a>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <form action="{{ route('comicses.update', $comic->id)}} " method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titolo comic</label>
    <input type="text" class="form-control" name="title" value="{{old('title' , $comic->title)}}">
   </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descrizione</label>
    <textarea type="text"  class="form-control" name="description" >{{old('description', $comic->description)}}</textarea> </textarea>
  </div>
  
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Thumb</label>
    <input type="text"  class="form-control" name="thumb" value="{{old('thumb' , $comic->thumb)}}">
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prezzo</label>
    <input type="text"  class="form-control" name="price"value="{{old('price', $comic->price)}}" >
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Serie</label>
    <input type="text"  class="form-control" name="series" value="{{old('series', $comic->series)}}">
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Uscita data</label>
    <input type="text"  class="form-control" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tipo</label>
    <input type="text"  class="form-control" name="type" value="{{old('type', $comic->type)}}" >
  {{-- </div>

     <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Artists</label>
    <input type="text"  class="form-control" name="artists" >
  </div>

     <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Writers</label>
    <input type="text"  class="form-control" name="writers" >
  </div> --}}

   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</body>
</html>