<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="/" rel="tooltip" title="Go Home" data-placement="bottom" ">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./img/blurred-image-1.jpg">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">{{ __('Twitter') }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">{{ __('Facebook') }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">{{ __('Instagram') }}</p>
                        </a>
                    </li>
                </ul>
                    <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                            <p>{{ __('Login') }}</p>
                        </a>
                    </li>
                   <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            <p>{{ __('Register') }}</p>
                        </a>
                    </li>
                    
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                           <i class="fa fa-rss-square" aria-hidden="true"></i>
                            <p>{{ __('Blog') }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">
                            <i class="fa fa-share-square" aria-hidden="true"></i>
                            <p>{{ __('Contact') }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-neutral" href="#" target="_blank">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <p>{{ __('Documentation') }}</p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><p>{{ Auth::user()->username }}</p> <span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="{{ route('dashboard') }}"><i class="fa fa-user-circle-o" aria-hidden="true"></i><p> {{ __('Dashboard') }}</p></a>
                            @role('admin')
                             <a class="dropdown-item" href="{{ route('admin') }}"><i class="fa fa-unlock-alt" aria-hidden="true"></i><p>{{ __('Administration') }}</p></a>
                            @endrole
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i><p>{{ __('Logout') }}</p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>