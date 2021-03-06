<header id="header">
    <div class="container-fluid">
        <div class="navbar">
            <a href="{{ url('/') }}" id="logo" title="">
                <img src="{{ asset($icons->logo) }}" alt="">
            </a>
            <div class="navigation-row">
                <nav id="navigation">
                    <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                    <div class="nav-box navbar-collapse">
                        <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                            <li data-menuanchor="slide01" class="active"><a href="#slide01">Home</a></li>
                            <li data-menuanchor="slide02"><a href="#slide02">About Me</a></li>
                            <li data-menuanchor="slide03"><a href="#slide03">Services</a></li>
                            <li data-menuanchor="slide04"><a href="#slide04">My Skills</a></li>
                            <li data-menuanchor="slide05"><a href="#slide05">My Work</a></li>
                            <li data-menuanchor="slide06"><a href="#slide06">Testimonials</a></li>
                            <li data-menuanchor="slide07"><a href="#slide07">Contact Me</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<video autoplay muted loop id="myVideo">
    <source src="{{ asset('frontend/assets/images/video-bg.mp4') }}" type="video/mp4">
</video>
@include('homeBody.homes')
