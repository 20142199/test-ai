<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bekisoft JSC</title>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/block-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/block-2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/block-3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    @include('header')
    
    @include('block-1')
    
    @include('block-2')
    
    @include('block-3')
    
    <main>
        <h1>Bekisoft JSC</h1>
    </main>
    
    @include('footer')
</body>
</html>
