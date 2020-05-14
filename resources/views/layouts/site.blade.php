<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include("inc.site.head")

@if('main' == \Route::currentRouteName())
    <body class="index-page">
@else
    <body>
@endif

  <div id="main">
      @if('main' == \Route::currentRouteName())
          @include('inc.site.header')
      @else
          @include('inc.site.header2')
      @endif
      @include('site.catalog')
      @yield('content')
      @include("inc.site.footer")
  </div>
     @include("inc.site.footerjs")
</body>
</html>
