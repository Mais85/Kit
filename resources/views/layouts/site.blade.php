<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include("inc.site.head")
<body>
  <div id="main">
      @if(route('main') != \Route::current())

      @endif
      @yield('content')
      @include("inc.site.footer")
  </div>
     @include("inc.site.footerjs")
</body>
</html>
