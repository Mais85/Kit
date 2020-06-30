<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin @yield('title')</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
    <link href="{{ asset('/assets/admin//css/datepicker.min.css') }}" rel="stylesheet" type="text/css">
    @yield('assets')
    <script src="{{ asset('/assets/admin/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/admin//js/datepicker.az.js') }}"></script>
    <style>
        @font-face {
          font-family: 'Lato';
          font-style: normal;
          font-weight: 400;
          src: local('Lato Regular'), local('Lato-Regular'), url(/assets/admin/fonts/AvenirNextCyr/AvenirNextCyr-Medium.woff) format('woff');
        }
        /*
        @font-face {
          font-family: 'Lato';
          font-style: normal;
          font-weight: 500;
          src: local('Lato Regular'), local('Lato-Regular'), url(/assets/admin/fonts/AvenirNextCyr/AvenirNextCyr-Medium.woff) format('woff');
        }
        */
        @font-face {
          font-family: 'Lato';
          font-style: normal;
          font-weight: bold;
          src: local('Lato Regular'), local('Lato-Regular'), url({{ asset('/assets/admin/fonts/AvenirNextCyr/AvenirNextCyr-Bold.woff') }}) format('woff');
        }
    </style>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}?<?php echo rand(100, 10000); ?>" type="image/x-icon">

    <!-- Stylesheet -->
    @yield('css')
    <link rel="stylesheet" href="/assets/admin/css/neat.minc619.css?v=<?php echo rand(1000,10000); ?> ">

    <style>
    .has-submenu{margin-top: 10px!important;}
    .logout_btn{box-shadow: none;box-shadow: none;width:100%;text-align:left;background: transparent;border:none;outline:none;}
    .c-invoice__wrapper{padding: 20px 100px 0!important;}
    .c-tabs__pane{border:none;padding-bottom:0;padding-top:10px;}
    .c-tabs__content{padding-top:20px;}
    .c-tabs__list{border-top:none;border-left:none;border-right:none;}
    .c-field{margin-bottom: 20px;}
    .admin_image{position:relative;}
    .admin_image_close{position:absolute;width: 15px;height: 15px;top:6px;left:6px;color:red;opacity: 0.5;cursor:pointer;transition: all .2s linear;}
    .admin_image_close:hover{opacity: 1;}
    .c-choice__input {position:relative;margin: 30px 0 15px 0!important;}
    hr{height: 1px;color: #ecedf2;background-color: #ecedf2;border: none;}
    </style>
</head>
