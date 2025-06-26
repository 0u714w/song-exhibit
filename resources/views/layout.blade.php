<!DOCTYPE html>
<html>
<head>
    <title>Song Exhibit</title>
    <style>
        body { font-family: sans-serif; margin: 2rem; }
        audio { display: block; margin-top: 1rem; }
    </style>
    <meta property="og:title" content="Song Exhibit" />
<meta property="og:description" content="3 songs of the same kind" />
<meta property="og:image" content="{{ asset('images/blue_triangle.png') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="blue triangle" />
<meta name="twitter:description" content="songs." />
<meta name="twitter:image" content="{{ asset('images/blue_triangle.png') }}" />

</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
