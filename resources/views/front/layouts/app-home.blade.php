<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('front.partials.head')

<body class="sidebar-collapse">
@include('front.partials.nav')
<div class="wrapper">
    @include('front.partials.page-header-home')
    <div class="main">
        @include('partials.errors')
        @yield('content')
    </div>
</div>

</body>
</html>
