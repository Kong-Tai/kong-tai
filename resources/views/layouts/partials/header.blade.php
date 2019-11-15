
            <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-top white-link header-dark background-transparent nav-box-width padding-four-lr navbar-expand-lg on no-full">
                <div class="container-fluid nav-header-container">
                    <!-- start logo -->
                    <div class="col col-md-auto col-lg-2 pl-0">
                        <a href="/" title="Pofo" class="logo">
                            <img src="/images/kong-tai.png" data-rjs="images/logo@2x.png" class="logo-dark" alt="Pofo">
                            <img src="/images/kong-tai.png" data-rjs="images/logo-white@2x.png" alt="Pofo" class="logo-light default">
                        </a>
                    </div>
                    <!-- end logo -->
                    <div class="col col-md accordion-menu pr-0 pr-lg-3">
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1" aria-expanded="false">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-center" id="navbar-collapse-toggle-1">
                            <ul class="nav navbar-nav alt-font text-normal">
                                <!-- start menu item -->
                                <li class="dropdown simple-dropdown">
                                    <a href style="color: #fff;" >Home <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i></a>
                                    <ul class="dropdown-menu animated" style="display: none; opacity: 1; pull-left">
                                        <a href class="dropdown-header">SKIP TO</a>
                                        <li>
                                            <a href="#portfolio"> Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="#gallery"> Gallery</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- end menu item -->
                                <!-- start menu item -->
                                <li><a href="/team" class="inner-link">Our Team</a></li>
                                <!-- end menu item -->
                                <!-- start menu item -->
                                <li><a href="/blog" class="inner-link">Blog</a></li>
                                <!-- end menu item -->

                                <li class="dropdown simple-dropdown">
                                    @guest
                                    <a href style="color: #fff;" >Sign in  <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i></a>
                                    <ul class="dropdown-menu animated" style="display: none; opacity: 1; pull-left">
                                        <a href="#" class="dropdown-header">SIGN IN TO</a>
                                        <li>
                                            <a href="{{ route('login') }}"><i class="ti-user"></i> Community</a>
                                        </li>
                                        <li>
                                            <a href="/admin"> Control Panel</a>
                                        </li>
                                    </ul>
                                    @else
                                    <a href style="color: #fff;" > <i class="ti-user"></i> {{ Auth::user()->name }} <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i></a>
                                        <ul class="dropdown-menu animated" style="display: none; opacity: 1; pull-left">
                                            <li>
                                                <a href="/"><i class="ti-heart"></i> Favorite posts</a>
                                            </li>
                                            <li>
                                                <a  href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"
                                                >
                                                    <i class="ti-lock"></i>
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    @endguest
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="nav navbar-nav alt-font text-normal navbar-left">
                    </ul>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
