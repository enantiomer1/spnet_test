<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('back.partials.head')

<body>
    <div id="app">
        @include('back.partials.nav')
        <main class="py-4">
        	<div class="container">
        		@include('partials.errors')
        		@yield('content')
        	</div>
       </main>
    </div>
</body>
</html>
