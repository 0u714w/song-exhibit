@extends('layout')

@section('content')
    <h1>Studio Version</h1>
    <audio controls>
        <source src="{{ asset('storage/audio/studio.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <p>This was recorded professionally in a studio years later...</p>
@endsection
