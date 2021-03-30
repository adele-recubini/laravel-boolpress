@dump($authors)


<form action ="{{ route('post.store')}}" method="post">
    @csrf
    @method('POST')

    <select class="form-controll" name="author_id" id="author_id" aria-label=".form-select-lg example">
        @foreach ($authors as $author )
         <option value="{{$author->id}}">{{$author->name}} {{$author->lastname}}</option>
        @endforeach
      </select>




    <div class="form-group">
      <label for="titolo">titolo</label>
      <input type="text" class="form-control" id="title" placeholder="titolo articolo" name="title">
    </div>

    <div class="form-group">
      <label for="body1">body</label>
      <textarea class="form-control" id="body" name="body" rows="3"></textarea>
    </div>

    <div class="form-group">
        <select class="form-select" name="tags[]" id ="tags[]" multiple>
            @foreach ( $tags as $tag )
            <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach

          </select>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
