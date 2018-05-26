<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('front.partials.head')

<body>
    <div id="app">
        @include('front.partials.nav')
        <main class="py-4">
        	<div class="container">
        		@include('partials.errors')
        		@yield('content')
        	</div>
       </main>
    </div>
</body>
</html>
