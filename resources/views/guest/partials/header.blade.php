<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light foi-navbar">
        <a class="navbar-brand" href="{{ route('guest.index') }}">
            <img src="{{ Vite::asset('resources/images/blink-icon.png') }}" alt="blink_logo">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('guest.index') }}">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Templat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Harga</a>
                </li>
                 <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <div class="dropdown-menu" aria-labelledby="pagesMenu">
                        <a class="dropdown-item" href="blog.html">Blog</a>
                        <a class="dropdown-item" href="login.html">Login</a>
                        <a class="dropdown-item" href="register.html">Register</a>
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="404.html">404</a>
                        <a class="dropdown-item" href="careers.html">Careers</a>
                        <a class="dropdown-item" href="blog-single.html">Single blog</a>
                        <a class="dropdown-item" href="privacy-policy.html">Privacy policy</a>
                    </div>
                </li>  -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guest.contact') }}">Kontak</a>
                </li>
            </ul>
            <ul class="navbar-nav mt-2 mt-lg-0">
                @guest
                    <li class="nav-item mr-2 mb-3 mb-lg-0">
                        <a class="btn btn-secondary" href="{{ route('guest.register') }}">Sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secondary" href="{{ route('guest.login') }}">Login</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secondary" onclick="document.getElementById('form-logout').submit()">Logout</a>
                    </li>
                    <form action="{{ route('logout') }}" id="form-logout" method="post">@csrf</form>
                @endguest
            </ul>
        </div>
    </nav>
    @if (request()->is('/'))
        <div class="header-content">
            <div class="row">
                <div class="col-md-6">
                    <h1>PUSH YOUR EVERYTHING WITH LINK</h1>
                    <!-- <p class="text-dark"></p> -->
                    <button class="btn btn-order mb-4">Start For Free</button>
                
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/app_1.png') }}" alt="app" width="388px" class="img-fluid">
                </div>
            </div>
        </div>
    @endif
</div>