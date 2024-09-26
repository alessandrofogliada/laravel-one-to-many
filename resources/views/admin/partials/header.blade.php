{{-- questo sarà il menu piccolo in cima con le funzioni di tornare alla home del sito a sinistra ed a destra la possibilità di login/logout --}}
<div class="row-12 text-bg-dark d-flex justify-content-between">

    <div><a href="{{route('home')}}" target="_blank">Vai al sito</a></div>

    <ul class="navbar">
        @guest
            <li class="nav-item pe-3"><a href="{{route('login')}}">Login</a></li>
            <li class="nav-item pe-3"><a href="{{route ('register')}}">Registrati</a></li>
        @else 
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> 
                    {{ Auth::user()->name }} 
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.dashboard')}}">Admin</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    Logout
                    </a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @endguest
    </ul>

</div>


{{-- <div class="btn-group">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Collegamenti Vari
    </button>
    <ul class="dropdown-menu dropdown-menu-end">
        <li><a href="{{route ('home')}}" class="dropdown-item" type="button">Home</a></li>
        <li><a href="{{route ('admin.home')}}" class="dropdown-item" type="button">Dashboard</a></li>
    </ul>
</div> --}}

