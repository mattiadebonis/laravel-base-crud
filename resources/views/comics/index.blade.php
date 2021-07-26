@extends('layouts.main')

@section('content')
    <div>
        <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Azioni</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comics as $comic)
              <tr>
                <th scope="row">{{$comic->id}}</th>
                <td>{{$comic->title}}</td>
                <td>{{$comic->price}} €</td>
                
              </tr>
              @endforeach
            </tbody>
          </table>          
    </div>
@endsection
