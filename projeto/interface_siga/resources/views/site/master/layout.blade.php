<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    @vite(['resources/js/app.js'])

    <title>@section('titulo')
        Menu
        @endsection
    </title>

</head>

<body>

    <div class="d-flex">
        <div class="menu-lateral m-3">
            <!-- Menu Lateral -->
            <aside class="main-sidebar">
                <!-- Logo do Menu -->
                <a href="#" class="logo">
                    <span class="logo-mini"><i class="fas fa-cogs"></i></span>
                    <span class="logo-lg"><i class="fas fa-cogs"></i> Meu Menu</span>
                </a>

                <!-- Links do Menu -->
                <nav class="sidebar">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Link Início -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-home nav-icon"></i>
                                <p>Início</p>
                            </a>
                        </li>

                        <!-- Link Usuários -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Usuários</p>
                            </a>
                        </li>

                        <!-- Link Configurações -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-cog nav-icon"></i>
                                <p>Configurações</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>
        </div>


        <div class="conteudo flex-grow-1 mt-3">
            <div class="barra-superior">
                <p>Nome</p>
            </div>
            
            <div class="conteudo-principal mt-3 mb-3">
                <!-- conteúdo principal -->
                <main>

                    @yield('content')

                </main>
            </div>
        </div>


        <div class="menu-direito m-3">
            <aside class="main-sidebar">
                <!-- Logo do Menu -->
                <a href="#" class="logo">
                    <span class="logo-mini"><i class="fas fa-cogs"></i></span>
                    <span class="logo-lg"><i class="fas fa-cogs"></i> Meu Menu</span>
                </a>

                <!-- Links do Menu -->
                <nav class="sidebar">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Link Início -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-home nav-icon"></i>
                                <p>Início</p>
                            </a>
                        </li>

                        <!-- Link Usuários -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Usuários</p>
                            </a>
                        </li>

                        <!-- Link Configurações -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-cog nav-icon"></i>
                                <p>Configurações</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>
        </div>
    </div>







    <!-- JavaScript! -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>