<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include("inc.site.head")
<body class="index-page">
  <div id="main">
      @include("inc.site.header")
      @yield('content')
      @include("inc.site.footer")
  </div>
     @include("inc.site.footerjs")
</body>
</html>
