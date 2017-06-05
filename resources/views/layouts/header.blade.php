<nav class="pink accent-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{ url('/') }}" class="brand-logo">RAFICA</a>
        <ul class="right hide-on-med-and-down">
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
            @else
                <a href="#" class="dropdown-button btn" data-toggle="dropdown" data-activates='dropdown1' aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>

                <ul id='dropdown1' class='dropdown-content'>
                    <li>
                        <a href="{{ route('user.index') }}">Account Information</a>
                    </li>
                    <li>
                        <a href="{{ route('cabang.index') }}">Cabang Information</a>
                    </li>
                    <li>
                        <a href="{{route('change-password')}}">Change Password</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            @endif
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="{{ url('/')}}">Home</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>