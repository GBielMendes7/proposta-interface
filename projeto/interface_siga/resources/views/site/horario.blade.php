@extends('site.master.layout')

@section('titulo')
Iniciar
@endsection

@section('content')

<h2>Horários parciais</h2>
<div class="conteudo-principal">
    @foreach ($materia as $item)
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
                    <td class="horario-teste">{{ $item->sigla }}</td>
                    <td class="horario-teste">{{ $item->turma }}</td>
                </tr>
                <tr>
                    <td class="horario-teste">19:50 - 20:40</td>
                    <td class="horario-teste">{{ $item->sigla }}</td>
                    <td class="horario-teste">{{ $item->turma }}</td>
                </tr>
                <tr>
                    <td class="horario-teste">20:50 - 21:40</td>
                    <td class="horario-teste">{{ $item->sigla }}</td>
                    <td class="horario-teste">{{ $item->turma }}</td>
                </tr>
                <tr>
                    <td class="horario-teste">21:40 - 22:30</td>
                    <td class="horario-teste">{{ $item->sigla }}</td>
                    <td class="horario-teste">{{ $item->turma }}</td>
                </tr>
            </table>
        </div>
    </div>
        
    @endforeach
    
    

    
    <br>
    <div class="professores">
        <div class="span">
            <span class="material-icons-outlined">school</span><h3 class="texto-button">PROFESSORES E DISCIPLINAS</h3>
        </div>
        <br>
        <div class="tabela_prof">
            <table>
                <tr>
                    <th>Sigla</th> 
                    <th>Disciplina</th> 
                    <th>Turma</th>
                    <th>Professor</th>  
                </tr>
                @foreach ($materia as $item)
                    <tr>
                        <td>{{ $item->sigla }}</td>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->turma }}</td>
                        <td>{{ $item->professor }}</td>
                    </tr>
                @endforeach
            
            </table>
        </div>
    </div>
</div>



@endsection