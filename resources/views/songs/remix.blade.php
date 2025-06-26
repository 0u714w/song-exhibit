@extends('layout')

@section('content')
    <h1>Remix Version</h1>
    <audio controls>
        <source src="{{ asset('storage/audio/remix.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <p>A friend remixed this version giving it a fresh spin...</p>
@endsection
