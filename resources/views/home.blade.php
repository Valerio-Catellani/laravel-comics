@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <h1>Home page</h1>
        <ul>
            @foreach ($data['comics'] as $comic)
                <li>{{ $comic['series'] }}</li>
            @endforeach
        </ul>
    </main>

@endsection
