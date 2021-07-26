@extends('layouts.main')

@section('content')
    <div>
        <form action="{{route('comics.store')}}" method="post">
            @csrf
            @method('post')
            <div>
              <label for="name">Titolo</label>
              <input type="text" name="name" placeholder="Inserisci titolo">
            </div>
            <button type="submit">Salva</button>
          </form>
    </div>
@endsection