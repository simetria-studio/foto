<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/0ab2bcde1c.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('site/css/main.min.css') }}">
    <title>PROJETO FOTO</title>
</head>

<body>
    <header>
        <div class="top-header">
            <div class="container-fluid">
                <div class="top-grid">
                    <div>
                        <h5>Bem vindo, <a>Clique Aqui</a> para entrar</h5>
                    </div>
                    <div>

                    </div>
                    <div class="links">
                        <h5>Minha Conta | Minhas Compras | Sou Fotografo</h5>
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
                            <input type="text" class="form-control" placeholder="PESQUISAR"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
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
    </header>
    <main>
        @yield('content')
    </main>
    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
