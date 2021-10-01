<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        
        <h1 class="logo"><a href="index.html">{{ $data1[0]->titrenav }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="{{asset('')}}/img/logo.png" alt="" class="img-fluid"></a>-->
        
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">{{ $data1[0]->link1nav }}</a></li>
                <li><a class="nav-link scrollto" href="#about">{{ $data1[0]->link2nav }}</a></li>
                <li><a class="nav-link scrollto" href="#services">{{ $data1[0]->link3nav }}</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">{{ $data1[0]->link4nav }}</a></li>
                <li><a class="nav-link scrollto" href="#team">{{ $data1[0]->link5nav }}</a></li>
                <li><a class="nav-link scrollto" href="#contact">{{ $data1[0]->link6nav }}</a></li>
                <li><a class="getstarted scrollto" href="#about">{{ $data1[0]->btnstartnav }}</a></li>

                <li class="d-flex">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ $data1[0]->dashboard }}</a>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ $data1[0]->login }}</a>
                    
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">{{ $data1[0]->register }}</a>
                    @endif
                    @endauth
                </li>

                


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        
    </div>
</header><!-- End Header -->