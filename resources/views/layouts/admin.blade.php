<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('inc.admin.head')
<body>
<div class="o-page">
    @include('inc.admin.left')
    <main class="o-page__content">
        @include('inc.admin.header')
        <div class="container">
            @include('inc.admin.alert')
            @yield('content')
            @include('inc.admin.footer')
        </div>
    </main>
</div>
@include('inc.admin.footerjs')

@yield('js')
</body>
</html>
