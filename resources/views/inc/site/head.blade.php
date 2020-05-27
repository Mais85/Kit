<head>
    <meta charset="utf-8">
    <title>{{$__settings->title}} @yield('title')</title>

    <!-- META -->
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{$__settings->meta_description}}">
    <meta name="keywords" content="{{$__settings->meta_keywords}}">


    <!-- CUSTOM STYLESHEET -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link media="screen" href="{{ asset('/css/site.css') }}?<?php echo rand(100, 10000); ?>" type="text/css" rel="stylesheet" />

    <!-- CUSTOM JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
