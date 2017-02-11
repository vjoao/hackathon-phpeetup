<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button><a href="{{ route('home') }}" class="navbar-brand">PossoAjudar</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                
                <li class="{{ request()->path() == "/" ? 'active' : 'n' }}"><a href="{{ route('home') }}">Quero ajudar</a></li>
            
            @if(!Auth::guest())
                <li class="{{ request()->path() == "organisations" ? 'active' : 'n' }}"><a href="{{ route('organisations') }}">Minhas organizações</a></li>
            @endif

            </ul>

            @if (Auth::guest())
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ request()->path() == "login" ? 'active' : 'n' }}"><a href="{{ route('auth.login') }}">Entrar</a></li>
                    <li class="{{ request()->path() == "signup" ? 'active' : 'n' }}">
                    <a href="{{ route('auth.register') }}">Cadastrar-se</a></li>
                </ul>
            @else
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <img src="{{ Auth::user()->getAvatarUrl() }}" width="25" height="25" /> {{ Auth::user()->fullname }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('account.dashboard') }}"><i class="fa fa-btn fa-user"></i> Meu perfil</a></li>
                        <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>
                </ul>
            @endif
        </div>
    </div>
</div>