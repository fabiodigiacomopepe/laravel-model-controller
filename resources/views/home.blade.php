@extends('layouts.main-layout')

@section('content')
    <ul>
        @foreach ($movies as $movie)
            <li>
                {{ $students->title }}
            </li>
        @endforeach
    </ul>
@endsection
