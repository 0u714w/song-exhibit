@extends('layout')

@section('content')
    <h1>Dorm Room Version</h1>
    <audio controls>
        <source src="{{ asset('storage/audio/dorm-room.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <p>This was recorded in my dorm room in 2010...</p>
@endsection
