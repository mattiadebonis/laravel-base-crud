@extends('layout.main')


@section('content')
    <div>
        <div>
            <h1>{{$comic->title}}</h1>
            <h4>{{$comic->series}}</h4>
            <p>{{$comic->description}}</p>
            <h3>{{$comic->price}} €</h3>
        </div>
    </div>
@endsection