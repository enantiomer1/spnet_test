<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('back.partials.head')

<body>
    <div class="wrapper">
        @include('back.partials.sidebar')
        <main>
            <div class="main-panel">
            	@include('back.partials.nav')
                <div class="panel-header panel-header-sm"></div>
                @include('partials.errors') 
                @yield('content')
                @include('back.partials.footer')
            </div>
        </main>
    </div>
</body>
</html>
