<header>
    <!-- header inner -->
    <div class="header">

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('assets')}}/images/logo.png" alt="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $parentCategories=\App\Http\Controllers\HomeController::categoryList();
                @endphp
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active"> <a href="index.html">Home</a> </li>
                                    @foreach($parentCategories as $rs)
                                    <li> <a href="about.html">{{$rs->title}}</a> </li>
                                    @endforeach
                                    <li class="last">
                                        <a href="#"><img src="{{asset('assets')}}/images/search_icon.png" alt="icon" /></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-6">
                    <div class="location_icon_bottum">
                        <ul>
                            @auth
                            <li><img src="{{asset('assets')}}/icon/user1.png" />{{Auth::user()->name}}</li>
                                <li><i>Welcome To HomePage</i></li>
                                <li><a href="{{route('logout')}}"><img src="{{asset('assets')}}/icon/logout.png" />Logout</a></li>

                            @endauth
                            @guest
                                    <li><a href="/login">Login</a></li>
                                    <li><i>Welcome To Our Site as a Guest!</i></li>
                                    <li><a href="/register"><img src="{{asset('assets')}}/icon/register1.png" /></a></li>
                            @endguest
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
