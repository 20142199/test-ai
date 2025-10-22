<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bekisoft JSC</title>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/block-1.css') }}">
</head>
<body>
    @include('header')
    
    <main>
        @include('block-1')
    </main>

    <!-- JS Files -->
    <script src="{{ asset('js/main.js') }}" type="module"></script>
</body>
</html>
