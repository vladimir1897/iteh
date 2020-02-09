<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-left" href="index.php"><img id="logo" src="{{asset('img/logo.png')}}" width="120"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li><a href="{{route('home')}}">Music <span class="sr-only">(current)</span></a></li>
                @if(auth()->check() && auth()->user()->IsAdmin)
                <li><a href="{{route('pesma.dodaj')}}">Dodaj Pesmu</a></li>
                    <li><a href="#">Narudzbine</a></li>
                @endif
            </ul>
            <ul class='nav navbar-nav navbar-right'>
                @if(auth()->user())
                    <li><a href="{{route('user.profil')}}">{{auth()->user()->name}}</a></li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Izloguj se</a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;" >
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <li><a href='{{route('korpa')}}'><i class="fas fa-shopping-cart"></i></a></li>
                @else
                    <li><a href="{{route('login')}}">Uloguj se</a></li>
                    <li><a href="{{route('register')}}">Registruj se</a></li>
                @endif
            </ul>

        </div>
    </div>
</nav>
