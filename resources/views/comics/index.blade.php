@extends('layouts.main')

@section('content')
    <div>
        <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comics as $comic)
              <tr>
                <th>{{$comic->id}}</th>
                <td>{{$comic->name}}</td>
                <td><a href="{{route('comics.show', $comic->id)}}" role="button">Mostra</a></td>
                <td><a href="{{route('comics.edit', $comic->id)}}" role="button">Modifica</a></td>
                <td>
                  <form action="{{route('comics.destroy', $comic)}}" method="post" onSubmit="return confirm('Vuoi cancellare \'{{$comic->title}}\'?')">
                    @csrf
                    @method('delete')
                      <button type="submit">Elimina</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>       

        <a href="{{route('comics.create')}}">Nuovo elemento</a>
    
    </div>
@endsection
