@extends('layouts.main')


@section('content')
    <div>
        <form action="{{route('comics.update', $comic)}}" method="post">
            @csrf
            @method('patch')
            <div>
              <label for="name">Titolo</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il titolo" value="{{$comic->name}}">
            </div>

            <button type="submit">Salva</button>

          </form>
    </div>
@endsection