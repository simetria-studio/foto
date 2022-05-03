<div class="top-header">
    <div class="container-fluid">
        <div class="top-grid">
            <div>
                <h5>Bem vindo, @if (!Auth::check())
                        <a href="{{ route('login') }}">Clique Aqui</a>
                    @else
                    <a href="{{ route('home') }}">{{ auth()->user()->name }}</a>
                    @endif para entrar</h5>
            </div>
            <div>

            </div>
            <div class="links">
                <h5><a href="{{ route('home') }}">Minha Conta</a> | <a href="{{ route('compras') }}">Minhas Compras</a> | <a href="#">Sou Fotografo</a> </h5>
            </div>
        </div>
    </div>
</div>
<div class="mid-header-bg">
    <div class="mid-header">
        <div class="mid-header-grid">
            <div class="logo">
                <a href="{{ route('site') }}"> <img src="{{ asset('site/img/logo.svg') }}" alt=""></a>
            </div>
            <div class="search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="PESQUISAR" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="icons">
                <div>
                    <i class="fas fa-heart"></i>
                </div>
                <div>
                    <span class="red">0</span>
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div>
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="menu">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark mx-auto">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('site') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Corrida</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ciclismo</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
