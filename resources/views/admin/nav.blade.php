<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <!-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> -->
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Berita</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.agenda') }}">Agenda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.fasilitas') }}">Fasilitas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.datatablejemaat') }}">Data Jemaat</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kepengurusan
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Majelis</a>
                <a class="dropdown-item" href="#">Komisi Anak</a>
                <a class="dropdown-item" href="#">Komisi Pemuda</a>
                <a class="dropdown-item" href="#">Komisi Wanita</a>
                <a class="dropdown-item" href="#">Komisi Pembangunan</a>
                <a class="dropdown-item" href="#">Komisi Kehartaan</a>
                <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
            </div>
        </li>
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            <!-- @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif -->
        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest

    </ul>
    </div>
</nav>