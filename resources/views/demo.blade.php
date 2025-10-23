<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bekisoft JSC</title>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/block-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/block-2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/block-4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/block-5.css') }}">
</head>
<body>
    @include('header')
    
    @include('block-1')
    
    @include('block-2')
    
    @include('block-4')
    
    @include('block-5')
    
    <!-- JavaScript Files -->
    <script src="{{ asset('js/block-4.js') }}"></script>
</body>
</html>
