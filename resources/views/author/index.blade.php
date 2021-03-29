<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css') }}" type="text/css">
        <script src="{{ asset('js/app.js') }}"></script>

        <title>authot</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      <h1>author</h1>

      {{-- creo la tabella e riporto tutte le proprietà della tabella, faccio diventare un link il name in modo tale che se clicco mi reindirizza nella route dove ho il singolo prodotto passandogli l id--}}

      <table class="table">
  <thead class="thead-dark">
    <tr>

      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">lastname</th>
      <th scope="col">email</th>
      <th scope="col">bio</th>
      <th scope="col">website</th>
      <th scope="col">pic</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($authors as $author)

    <tr>
       <th scope="row">{{$author->id}}</th>

       <td>{{$author->name}}></td>
       <td>{{$author->lastname}}</td>
       <td>{{$author->email}}</td>
       <td>{{$author->detail->bio}}</td>
       <td>{{$author->detail->website}}</td>
       <td><img src="{{$author->detail->pic}}" width="100"></td>

     </tr>
    @endforeach

  </tbody>
</table>





    </body>
</html>

