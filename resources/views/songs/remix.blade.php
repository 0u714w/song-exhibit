@extends('layout')

@section('content')
     <div style="gap: 20px;">

        <img src="{{ asset('images/pool.jpeg') }}" alt="pedals" style="width: 200px; border-radius: 8px;">
        <p style="font-size: 35px;">Featuring 'Blue Hour' by Cristina Spinei...</p>
    <audio controls>
        <source src="{{ asset('storage/audio/remix.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    
     </div>
@endsection
