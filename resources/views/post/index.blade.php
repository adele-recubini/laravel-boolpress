<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css') }}" type="text/css">
        <script src="{{ asset('js/app.js') }}"></script>

        <title>post</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      <h1>post</h1>

      {{-- creo la tabella e riporto tutte le proprietà della tabella, faccio diventare un link il name in modo tale che se clicco mi reindirizza nella route dove ho il singolo prodotto passandogli l id--}}

      <table class="table">
  <thead class="thead-dark">
    <tr>

      <th scope="col">#</th>
      <th scope="col">titolo</th>
      <th scope="col">body</th>
      <th scope="col">author-mail</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)

    <tr>
       <th scope="row">{{$post->id}}</th>
       <td>{{$post->title}}</td>
       <td><strong>{{$post->body}}</strong></td>
       <td>{{$post->author->email}}</td>


     </tr>
    @endforeach

  </tbody>
</table>





    </body>
</html>


