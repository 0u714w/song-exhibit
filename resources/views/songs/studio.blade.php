@extends('layout')

@section('content')
    <div style="gap: 20px;">
        <img src="{{ asset('images/jaguar.jpeg') }}" alt="studio" style="width: 200px; border-radius: 8px;">
    <p style="font-size: 35px;">sounds out of nowhere...</p>
    <audio controls>
        <source src="{{ asset('storage/audio/studio.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    
    </div>
@endsection
