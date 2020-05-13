<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include("inc.site.head")
<body>
  <div id="main">
      @if(route('main') != \Route::current())
          @include('inc.site.header2')
      @endif
      @yield('content')
      @include("inc.site.footer")
  </div>
     @include("inc.site.footerjs")
</body>
</html>
