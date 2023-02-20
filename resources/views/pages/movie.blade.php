@extends('layout.main-layout')

@section('content')    
  <h1>Lista movies</h1>
    <ul>
      @foreach ($movies as $movie)
        <li class="my-3">
          <h4 class="mt-3 text-primary">Movie</h4>
          <span class="text-decoration-underline">Nome:</span> {{ $movie -> name }} <br>
          <span class="text-decoration-underline">Anno:</span> {{ $movie -> year }} <br>
          <span class="text-decoration-underline">Incassi:</span> {{ $movie -> cashOut }} &dollar;

          <div class="my-2">
            <span class="fw-bold">Tag:</span>
            @foreach ($movie -> tags as $tag)
              #{{ $tag -> name }}
            @endforeach
          </div>
        </li>
      @endforeach
    </ul>
@endsection