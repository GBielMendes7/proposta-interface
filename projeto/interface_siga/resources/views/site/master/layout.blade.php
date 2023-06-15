<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    @vite(['resources/js/app.js'])

    <title>@section('titulo')
        Menu
        @endsection
    </title>

</head>

<body>

    <div class="d-flex">
        <div class="menu-lateral">
            <!-- Menu Lateral -->
            <aside class="main-sidebar">
                <!-- Logo do Menu -->
                <a href="#">
                <img src="{{ Vite::asset('resources/images/fatec.svg') }}" alt="Person" width="182" height="103">
                </a>

                <!-- Links do Menu -->
                <nav class="sidebar">
                    <ul class="nav nav-pills nav-sidebar flex-column mt-3" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Link home -->
                        <li class="selecao_principal"><a href="{{route('site.home')}}"><span class="material-symbols-outlined">home</span> Home</a></li>

                        <!-- Link matricula -->
                        <li class="selecao_principal"><a href="#"><span class="material-symbols-outlined">task</span> Matrícula</a></li>

                        <!-- Link consulta -->
                        <li class="selecao_principal"><a href="#" id="consulta-menu"><span class="material-symbols-outlined">search</span> Consulta</a>
                            <ul class="submenu">
                                <li class="selecao_segundario"><a href="#">Historico Completo</a></li>
                                <li class="selecao_segundario"><a href="{{route('site.horario')}}">Horário</a></li>
                                <li class="selecao_segundario"><a href="{{route('site.notas')}}">Notas Parciais</a></li>
                                <li class="selecao_segundario"><a href="{{route('site.falta')}}">Faltas Parciais</a></li>
                            </ul>
                        </li>

                        <!-- Link Agenda -->
                        <li class="selecao_principal"><a href="#"><span class="material-symbols-outlined">calendar_today</span> Agenda</a></li>

                        <!-- Link Segurança -->
                        <li class="selecao_principal"><a href="#"><span class="material-symbols-outlined">security</span> Segurança</a></li>

                        <!-- Link Solicitações -->
                        <li class="selecao_principal"><a href="#"> <span class="material-symbols-outlined">content_paste</span>Solicitações</a></li>

                        <!-- Link Upload de Arquivos -->
                        <li class="selecao_principal"><a href="#"><span class="material-symbols-outlined">upload</span> Upload de Arquivos</a></li>

                        <!-- Link Plano de Ensino -->
                        <li class="selecao_principal"><a href="#"><span class="material-symbols-outlined">assignment</span> Plano de Ensino</a></li>

                        <!-- Link Matriz em Inglês -->
                        <li class="selecao_principal"><a href="#"><span class="material-symbols-outlined">person</span> Matriz em Inglês</a></li>
                    </ul>
                </nav>
            </aside>
        </div>


        <div class="conteudo flex-grow-1 m-3">
            <div class="barra-superior">
                
                <div class="chip">
                    <img src="{{ Vite::asset('resources/images/avatar.png') }}" alt="Person" width="96" height="96">
                    {{ Auth::user()->name }}
                </div>
                <div class="chip2">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="icone_barra" style="background: none; border: none; cursor: pointer;">
                            <span class="material-symbols-outlined">exit_to_app</span>
                        </button>
                    </form>
                </div>
            </div>

            <div class="mt-3 mb-3">
                <!-- conteúdo principal -->
                <main>

                    @yield('content')

                </main>
            </div>
        </div>


        <div class="menu-direito">
            <aside class="main-sidebar">


                <div class="calendar-container">
                    <div id="calendar"></div>
                </div>

                <hr>


                <div class="card-container">
                    <h4 class="card-titulo">Aulas do dia</h4>
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col">
                                    <div class="Materia-code">
                                        <p class="nome_codigo">AGO005</p>
                                    </div>
                                    <p class="Materia-name">GESTÃO DE PROJETOS</p>
                                    <p class="professor-name">Ana Carolina</p>
                                </div>
                                <div class="col Materia-time">
                                    19:00 - 20:40
                                </div>
                            </div>
                            <hr>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col">
                                        <div class="Materia-code">
                                            <p class="nome_codigo">AGO005</p>
                                        </div>
                                        <p class="Materia-name">GESTÃO DE PROJETOS</p>
                                        <p class="professor-name">Ana Carolina</p>
                                    </div>
                                    <div class="col Materia-time">
                                        19:00 - 20:40
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </aside>

            <div class="c-container">
                <h5>PRÓXIMAS PROVAS</h5>

                <div class="row p2">
                    <div class="col">
                        <p class="p2-data">15/06/2023</p>
                        <div class="professor-name">AGO005</div>
                        <p class="Materia-name">GESTÃO DE PROJETOS</p>
                        <p class="professor-name">Ana Carolina</p>
                    </div>
                    <div class="col Materia-time">
                        <p class="texto_p2">P2</p>
                        <p>19:00 - 20:40</p>
                    </div>
                </div>

                <div class="row mt-3 p2-2">
                    <div class="col">
                        <p class="p2-data">15/05/2023</p>
                        <div class="professor-name">AGO005</div>
                        <p class="Materia-name">GESTÃO DE PROJETOS</p>
                        <p class="professor-name">Ana Carolina</p>
                    </div>
                    <div class="col Materia-time">
                        <p class="texto_p2">P2</p>
                        <p>20:50 - 22:30</p>
                    </div>
                </div>
            </div>




        </div>
    </div>
    </div>







    <!-- JavaScript! -->
    <script src="{{ asset('resources/js/calendar.js') }}"></script>
    <script src="{{ asset('resources/js/submenu.js') }}"></script>
    <script src="{{ asset('resources/js/barra-progresso.js') }}"></script>
    <script src="{{ asset('resources/js/nota-progresso.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>