<header class="main-header">
        <div class="custom-container clearfix">
            <nav class="main-navigation">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/store">Store</a>
                    </li>
                    <li>
                        <a href="/#about">Info</a>
                    </li>
                    <li>
                        <a href="/#news">News</a>
                    </li>
                    <li>
                        <a href="/#order">Make an order</a>
                    </li>
                </ul>
            </nav>
            <div class="user-block">
                <ul>
                
                @guest
                <li>
                    <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                </li>
                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                <li>
                @endif
            </ul>
            @else
            <ul>
                <li>
                    <a id="navbarDropdown" class="" href="{{ route('home') }}" >
                         {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </div>
             @endguest
        </div>
    </header>