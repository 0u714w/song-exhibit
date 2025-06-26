@extends('layout')

@section('content')
     <div style="gap: 20px;">

        <img src="{{ asset('images/pool.jpeg') }}" alt="pedals" style="width: 200px; border-radius: 8px;">
        <p style="font-size: 35px;">A friend remixed this version giving it a fresh spin...</p>
    <audio controls>
        <source src="{{ asset('storage/audio/remix.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    
     </div>
@endsection
