@extends('layout')

@section('content')
    <div style="gap: 20px;">

        <img src="{{ asset('images/pedals.jpeg') }}" alt="pedals" style="width: 200px; border-radius: 8px;">
        <p style="font-size: 35px;">recorded in my dorm room in 2010...</p>
    <audio controls>
        <source src="{{ asset('storage/audio/dorm-room.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    </div>
@endsection
