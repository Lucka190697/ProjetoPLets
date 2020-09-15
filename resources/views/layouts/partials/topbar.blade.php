<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            @guest
                <span> Base Project </span>
            @else
                <ul class="navbar-nav mr-auto">
                    @if(auth()->user()->isadmin == true)
                        <a href="{{ route('user.index') }}" class="btn btn-white">
                            <i class="fas fa-fw fa-user mr-1"></i>
                            @lang('labels.Users Managment')
                        </a>
                    @endif
                    <a href="{{ route('books.index') }}" class="btn btn-white">
                        <i class="fas fa-fw fa-book mr-1"></i>
                        @lang('labels.Books Managment')
                    </a>
                    <a href="{{ route('loans.index') }}" class="btn btn-white">
                        <i class="fas fa-fw fa-book-open mr-1"></i>
                        @lang('labels.Loan Management')
                    </a>
                </ul>
        @endguest
        <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">@lang('labels.Login')</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">@lang('labels.Register')</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                            <span class="avatar avatar-sm rounded-circle">
                                <img src="{{ asset('/users/'. auth()->user()->thumbnail) }}"
                                     class="rounded-circle ml-2" width="30" height="30">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(auth()->user()->isadmin == true)
                                <a class="dropdown-item" href="{{ route('user.edit', auth()->user()->id) }}">
                                    <i class="fa fa-user-alt mr-2"></i> Profile
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
     document.getElementById('logout-form').submit();">
                                <i class="fa fa-door-open mr-2"></i> @lang('labels.Logout')
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
