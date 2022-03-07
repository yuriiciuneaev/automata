<div class="navbar">
    <nav class="header-nav">
        <div class="container">
            <div class="nav-wrapper">
                <div class="header-logo">
                    <a href="{{ url('/') }}" data-target="mobile" class="mx0 sidenav-trigger left show-on-small">
                        <i class="material-icons">menu</i>
                    </a>
                    
                    <a href="{{ url('/') }}" class="brand-logo center black-text show-on-small">
                        <img src="{{ url('/images/logo.png') }}" alt="">
                    </a>
                </div>

                <ul>
                    <li><a id="navhome" href="{{ url('/') }}">HOME</a></li>
                    <li><a id="navcareers" href="{{ url('/careers') }}">CAREERS</a></li>
                    <li>
                        <a href="{{ url('/') }}" class="logo center">
                            <img src="{{ url('/images/logo.png') }}" alt="">
                        </a>
                    </li>
                    <li><a id="navinvestors" href="{{ url('/investors') }}">INVESTORS</a></li>
                    <li><a id="navcontact" href="{{ url('/contact') }}">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<ul class="sidenav guest-sidenav" id="mobile">
    <li><a class="white-text" href="{{ url('/') }}">HOME</a></li>
    <li><a class="white-text" href="{{ url('/careers') }}">CAREERS</a></li>
    <li><a class="white-text" href="{{ url('/investors') }}">INVESTORS</a></li>
    <li><a class="white-text" href="{{ url('/contact') }}">CONTACT</a></li>
</ul>
