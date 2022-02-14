<div class="navbar-fixed">
    <nav class="navbar white">
        <div class="nav-wrapper"><a href="#!" class="brand-logo grey-text text-darken-4"></a>
            <a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i
                    class="material-icons black-text">menu</i></a>
        </div>
    </nav>
</div>

{{-- ////////////////////////// --}}

<ul id="sidenav-left" class="sidenav sidenav-fixed" style="transform: translateX(0%);">
    <li><a href="{{ url('/admin/dashboard') }}" class="logo-container">Admin<i class="material-icons left">spa</i></a>
    </li>
    <li class="bold waves-effect"><a class="collapsible-header" tabindex="0">Dashboard <i
                class="material-icons">dashboard</i></a></li>

    </li>
    <li class="no-padding">
        <ul class="collapsible ">
            <li class="bold waves-effect"><a class="collapsible-header" tabindex="0">Home Page<i
                        class="material-icons chevron">chevron_left</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ url('/admin/characteristics') }}" class="waves-effect">Characteristics<i
                                    class="material-icons">dns</i></a></li>
                        <li><a href="{{ url('/admin/sliders') }}" class="waves-effect">Sliders<i
                                    class="material-icons">burst_mode</i></a></li>
                        {{-- <li><a href="javascript:void(0)" id="optimizeImage" class="waves-effect">Optimize
                                images<i class="material-icons">image</i></a></li> --}}
                    </ul>
                </div>
            </li>
            <li class="bold waves-effect"><a class="collapsible-header" tabindex="0">Products<i
                        class="material-icons chevron">chevron_left</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ url('/admin/products') }}" class="waves-effect">Manage Products<i
                                    class="material-icons">dns</i></a></li>
                    </ul>
                </div>
            </li>
            <li class="bold waves-effect"><a class="collapsible-header" tabindex="0">Services<i
                        class="material-icons chevron">chevron_left</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ url('/admin/services') }}" class="waves-effect">Manage Services<i
                                    class="material-icons">dns</i></a></li>
                    </ul>
                </div>
            </li>
            <li class="bold waves-effect"><a class="collapsible-header" tabindex="0">Contacts<i
                        class="material-icons chevron">chevron_left</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ url('/admin/contact') }}" class="waves-effect">Manage Contacts<i
                                    class="material-icons">dns</i></a></li>
                    </ul>
                </div>
            </li>
            <li class="bold waves-effect"><a class="collapsible-header" tabindex="0">Buy Now Page<i
                        class="material-icons chevron">chevron_left</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ url('/admin/resellers') }}" class="waves-effect">Manage Resellers<i
                                    class="material-icons">dns</i></a></li>
                    </ul>
                </div>
            </li>
            <li class="bold waves-effect"><a class="collapsible-header" tabindex="0">Account<i
                        class="material-icons chevron">chevron_left</i></a>

                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ url('/admin/settings') }}" class="waves-effect">Others</a></li>
                        <li>
                            <form class="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();">

                                    {{ __('Log Out') }}

                                </a>
                            </form>
                        </li>

                    </ul>
                </div>
            </li>
        </ul>
    </li>
</ul>
