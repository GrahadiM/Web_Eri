
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">
                    <!-- Logo -->
                    <a class="nav-brand" href="{{ url('/') }}">
                        <img src="{{ asset('frontend') }}/img/LogoRTS/RTSwhite.png" style="width:200px; height:100px; padding-top: 10px; padding-bottom: 10px;" alt="">
                    </a>
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap">
                                <span class="top"></span><span class="bottom"></span>
                            </div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="{{ Request::is('/')? "active":"" }}">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="{{ Request::is('designGrafis')? "active":"" }}">
                                    <a href="{{ url('designGrafis') }}">Design Grafis</a>
                                </li>
                                <li class="{{ Request::is('editingVideo')? "active":"" }}">
                                    <a href="{{ url('editingVideo') }}">Editing Video</a>
                                </li>
                                <li class="{{ Request::is('contact')? "active":"" }}">
                                    <a href="{{ url('contact') }}">Contact</a>
                                </li>
                                @guest
                                <li class="{{ Request::is('login')? "active":"" }}">
                                    <a href="{{ route('login') }}" class="btn confer-btn">
                                        Login<i class="zmdi zmdi-long-arrow-right"></i>
                                    </a>
                                </li>
                                @else
                                    @if (auth()->user()->role_id == 1)
                                    <li class="{{ Request::is('home')? "active":"" }}">
                                        <a href="{{ route('home') }}" class="btn confer-btn">
                                            Dashboard<i class="zmdi zmdi-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    @else
                                        <li class="{{ Request::is('logout')? "active":"" }}">
                                            <a href="{{ route('logout') }}" class="btn confer-btn"
                                                onclick="event.preventDefault(); 
                                                document.getElementById('logout-form').submit();">
                                                    Logout
                                                    <i class="zmdi zmdi-long-arrow-right"></i>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </a>
                                        </li>
                                    @endif
                                @endguest
                            </ul>
                            <!-- Get Tickets Button -->
                            <!-- <a href="login" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">
                                LOG OUT<i class="zmdi zmdi-long-arrow-right"></i>
                            </a> -->
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    