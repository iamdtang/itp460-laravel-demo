@extends('layouts/primary')

@section('main')
  <h1>{{$name}}</h1>
  <ul>
    @foreach ($technologies as $technology)
      <li>
        {{$technology}}
      </li>
    @endforeach
  </ul>
@endsection