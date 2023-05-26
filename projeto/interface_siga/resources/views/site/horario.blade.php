@extends('site.master.layout')

@section('titulo')
Iniciar
@endsection

@section('content')

<h2>Horários parciais</h2>
<div class="conteudo-principal">
    <button id="prof">
        <span class="material-icons-outlined">school</span> <h4 class="texto-button">Conheça nossos professores</h4></button>
    <br>
    <div class="horario-container">
        <h4 class="horario-titulo">Segunda-feira</h4>
        <div class="teste-p">
            <table>
                <tr>
                    <th class="horario-cabecalho">Horário</th>
                    <th class="horario-cabecalho">Disciplina</th>
                    <th class="horario-cabecalho">Turma</th>
                </tr>
                <tr>
                    <td class="horario-teste">19:00 - 19:50</td>
                    <td class="horario-teste">IRC100</td>
                    <td class="horario-teste">A</td>
                </tr>
                <tr>
                    <td class="horario-teste">19:50 - 20:40</td>
                    <td class="horario-teste">IRC100</td>
                    <td class="horario-teste">A</td>
                </tr>
                <tr>
                    <td class="horario-teste">20:50 - 21:40</td>
                    <td class="horario-teste">AG0005</td>
                    <td class="horario-teste">A</td>
                </tr>
                <tr>
                    <td class="horario-teste">21:40 - 22:30</td>
                    <td class="horario-teste">AG0005</td>
                    <td class="horario-teste">A</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="horario-container">
        <h4 class="horario-titulo">Segunda-feira</h4>
        <div class="teste-p">
            <table>
                <tr>
                    <th class="horario-cabecalho">Horário</th>
                    <th class="horario-cabecalho">Disciplina</th>
                    <th class="horario-cabecalho">Turma</th>
                </tr>
                <tr>
                    <td class="horario-teste">19:00 - 19:50</td>
                    <td class="horario-teste">IRC100</td>
                    <td class="horario-teste">A</td>
                </tr>
                <tr>
                    <td class="horario-teste">19:50 - 20:40</td>
                    <td class="horario-teste">IRC100</td>
                    <td class="horario-teste">A</td>
                </tr>
                <tr>
                    <td class="horario-teste">20:50 - 21:40</td>
                    <td class="horario-teste">AG0005</td>
                    <td class="horario-teste">A</td>
                </tr>
                <tr>
                    <td class="horario-teste">21:40 - 22:30</td>
                    <td class="horario-teste">AG0005</td>
                    <td class="horario-teste">A</td>
                </tr>
            </table>
        </div>
    </div>

    <!--<div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <table>
                    <thead>
                        <tr class="card-titulo">Segunda-feira</tr>
                    </thead>
                    <tbody>
                        
                        <tr >
                            <th>Horário</th>
                            <th>Disciplina</th>
                            <th>Turma</th>
                        </tr>
                        <tr>
                            <td>19:00 - 19:50</td>
                            <td>IRC100</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>19:50 - 20:40</td>
                            <td>IRC100</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>20:50 - 21:40</td>
                            <td>AG0005</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>21:40 - 22:30</td>
                            <td>AG0005</td>
                            <td>A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <table>
                    <thead>
                    <tr class="top-table">Terça-feira</tr> 
                    </thead>
                    <tbody>
                        <tr>
                            <th>Horário</th>
                            <th>Disciplina</th>
                            <th>Turma</th>
                        </tr>
                        <tr>
                            <td>19:00 - 19:50</td>
                            <td>IRC100</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>19:50 - 20:40</td>
                            <td>IRC100</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>20:50 - 21:40</td>
                            <td>AG0005</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>21:40 - 22:30</td>
                            <td>AG0005</td>
                            <td>A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <table>
                    <thead>
                        <tr class="top-table">Quarta-feira</tr> 
                    </thead>
                    <tbody>
                        <tr>
                            <th>Horário</th>
                            <th>Disciplina</th>
                            <th>Turma</th>
                        </tr>
                        <tr>
                            <td>19:00 - 19:50</td>
                            <td>IRC100</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>19:50 - 20:40</td>
                            <td>IRC100</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>20:50 - 21:40</td>
                            <td>AG0005</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>21:40 - 22:30</td>
                            <td>AG0005</td>
                            <td>A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <table>
                    <thead>
                    <tr class="top-table">Quinta-feira</tr> 
                    </thead>
                    <tbody>
                        <tr>
                            <th>Horário</th>
                            <th>Disciplina</th>
                            <th>Turma</th>
                        </tr>
                        <tr>
                            <td>19:00 - 19:50</td>
                            <td>IRC100</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>19:50 - 20:40</td>
                            <td>IRC100</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>20:50 - 21:40</td>
                            <td>AG0005</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>21:40 - 22:30</td>
                            <td>AG0005</td>
                            <td>A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <table class="horario">
                    <thead>
                        <tr class="top-table">Sexta-feira</tr> 
                    </thead>
                    <tbody>
                        <tr>
                            <th>Horário</th>
                            <th>Disciplina</th>
                            <th>Turma</th>
                        </tr>
                        <tr>
                            <td>19:00 - 19:50</td>
                            <td>IRC100</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>19:50 - 20:40</td>
                            <td>IRC100</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>20:50 - 21:40</td>
                            <td>AG0005</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>21:40 - 22:30</td>
                            <td>AG0005</td>
                            <td>A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                
                <table>
                    <thead>
                        <tr class="top-table"><th class="top-table">Sábado</th></tr> 
                    </thead>
                    <tbody>
                        <tr>
                            <th>Horário</th>
                            <th>Disciplina</th>
                            <th>Turma</th>
                        </tr>
                        <tr>
                            <td>07:40 - 08:30</td>
                            <td>IRC100</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>08:30 - 09:20</td>
                            <td>IRC100</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>09:30 - 10:20</td>
                            <td>AG0005</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>10:20 - 11:10</td>
                            <td>AG0005</td>
                            <td>A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="professores">
            <span class="material-icons-outlined">school</span>
            <h2>PROFESSORES</h2>
            <br>
            <div class="tabela_prof">
                <table>
                    <tr>
                       <th>Sigla</th> 
                       <th>Disciplina</th> 
                       <th>Turma</th>
                       <th>Professor</th>  
                    </tr>
                    <tr>
                        <td>AGO005</td>
                        <td>Gestão de Projetos - 4 hs/aula</td>
                        <td>A</td>
                        <td>Ana Carolina Nicolosi da R. Gracioso</td>
                    </tr>
                    <tr>
                        <td>AGO005</td>
                        <td>Gestão de Projetos - 4 hs/aula</td>
                        <td>A</td>
                        <td>Ana Carolina Nicolosi da R. Gracioso</td>
                    </tr>
                    <tr>
                        <td>AGO005</td>
                        <td>Gestão de Projetos - 4 hs/aula</td>
                        <td>A</td>
                        <td>Ana Carolina Nicolosi da R. Gracioso</td>
                    </tr>
                    <tr>
                        <td>AGO005</td>
                        <td>Gestão de Projetos - 4 hs/aula</td>
                        <td>A</td>
                        <td>Ana Carolina Nicolosi da R. Gracioso</td>
                    </tr>
                    <tr>
                        <td>AGO005</td>
                        <td>Gestão de Projetos - 4 hs/aula</td>
                        <td>A</td>
                        <td>Ana Carolina Nicolosi da R. Gracioso</td>
                    </tr>
                    <tr>
                        <td>AGO005</td>
                        <td>Gestão de Projetos - 4 hs/aula</td>
                        <td>A</td>
                        <td>Ana Carolina Nicolosi da R. Gracioso</td>
                    </tr>
                </table>
            </div>-->
</div>

@endsection