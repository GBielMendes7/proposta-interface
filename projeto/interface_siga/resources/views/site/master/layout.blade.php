<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <span class="logo-lg"><i class="fas fa-cogs"></i> Meu Menu</span>
                </a>

                <!-- Links do Menu -->
                <nav class="sidebar">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Link home -->
                        <li><a href="{{route('site.home')}}"><i class="fa fa-home"></i> Home</a></li>

                        <!-- Link matricula -->
                        <li><a href="#"><i class="fa fa-info-circle"></i> Matrícula</a></li>

                        <!-- Link consulta -->
                        <li><a href="#" id="consulta-menu"><i class="fa fa-envelope"></i> Consulta</a>
                            <ul class="submenu">
                                <li><a href="#">Historico Completo</a></li>
                                <li><a href="{{route('site.horario')}}">Horário</a></li>
                                <li><a href="{{route('site.notas')}}">Notas Parciais</a></li>
                                <li><a href="{{route('site.falta')}}">Faltas Parciais</a></li>
                            </ul>
                        </li>

                        <!-- Link Agenda -->
                        <li><a href="#"><i class="fa fa-envelope"></i> Agenda</a></li>

                        <!-- Link Segurança -->
                        <li><a href="#"><i class="fa fa-envelope"></i> Segurança</a></li>

                        <!-- Link Solicitações -->
                        <li><a href="#"><i class="fa fa-envelope"></i> Solicitações</a></li>

                        <!-- Link Upload de Arquivos -->
                        <li><a href="#"><i class="fa fa-envelope"></i> Upload de Arquivos</a></li>

                        <!-- Link Plano de Ensino -->
                        <li><a href="#"><i class="fa fa-envelope"></i> Plano de Ensino</a></li>

                        <!-- Link Matriz em Inglês -->
                        <li><a href="#"><i class="fa fa-envelope"></i> Matriz em Inglês</a></li>
                    </ul>
                </nav>
            </aside>
        </div>


        <div class="conteudo flex-grow-1 mt-3">
            <div class="barra-superior">
                <i class="fa fa-envelope"></i>
                <h2 class="nome">Nome</h2>
            </div>

            <div class="mt-3 mb-3">
                <!-- conteúdo principal -->
                <main>

                    @yield('content')

                </main>
            </div>
        </div>


        <div class="menu-direito m-3">
            <aside class="main-sidebar">


                <div class="calendar-container">
                    <div id="calendar"></div>
                </div>

                <div class="card-container">
                    <div class="card">
                        <h4 class="card-title">Aulas do dia</h4>
                        <hr>
                        <div class="row">
                            <div class="col">

                                    <div class="subject-code">
                                        <p>AGO005</p>
                                    </div>

                                        <p class="subject-name">GESTÃO DE PROJETOS</p>
                                        <p class="professor-name">Ana Carolina</p>
                 
                            </div>
                            <div class="col">
                                <p class="subject-time">19:00 - 20:40</p>
                            </div>

                        </div>



                    </div>
                </div>



        </div>

        </aside>
    </div>
    </div>







    <!-- JavaScript! -->
    <script src="{{ asset('resources/js/calendar.js') }}"></script>
    <script src="{{ asset('resources/js/submenu.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>