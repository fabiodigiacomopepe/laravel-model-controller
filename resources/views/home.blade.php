@extends('layouts.main-layout')

@section('content')
    @foreach ($movies as $movie)
        <div id="card">
            <div>
                Nome:
                {{ $movie->title }}
            </div>

            <div>
                Titolo originale:
                {{ $movie->original_title }}
            </div>

            <div>
                Nazionalità:
                {{ $movie->nationality }}
            </div>

            <div>
                Data:
                {{ $movie->date }}
            </div>

            <div>
                Voto:
                {{ $movie->vote }}
            </div>
        </div>
    @endforeach
@endsection
