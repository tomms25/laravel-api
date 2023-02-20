@extends('layouts.main-layout')

@section('content')
    
<h1>Film per genere</h1>
<div class="my-3">
  <a href="{{ route('create') }}" class="bg-info text-white p-2">CREA MOVIE</a>
</div>

  @foreach ($genres as $genre)
    <h2 class="text-primary">Genere: {{ $genre -> name }}</h2>
    <ul>
      @foreach ($genre -> movies as $movie)
        <li>
          <h4 class="mt-4 text-success">
            Movie
          </h4>
          <span class="text-decoration-underline">Nome:</span> {{ $movie -> name }} <br>
          <span class="text-decoration-underline">Anno:</span> {{ $movie -> year }} <br>
          <span class="text-decoration-underline">Incassi:</span> {{ $movie -> cashOut }} &dollar;

            <div class="my-2">
              <span class="fw-bold">Tag:</span>
              @foreach ($movie -> tags as $tag)
                #{{ $tag -> name }}
              @endforeach
            </div>

            <div class="my-2">
              <a href="{{ route('delete', $movie) }}" class="bg-danger text-white p-1">CANCELLA</a>
              -
              <a href="{{ route('edit', $movie) }}" class="bg-warning text-white p-1">MODIFICA</a> 
            </div>

        </li>
      @endforeach
    </ul>
  @endforeach

@endsection