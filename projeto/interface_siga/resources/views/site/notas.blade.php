@extends('site.master.layout')

@section('titulo')
Iniciar
@endsection

@section('content')

<h2>Notas parciais</h2>
<div class="conteudo-principal">
    <div class="flex-centro">

    @foreach ($materia as $item)

        <article class="box-materia">
            <div class="sigla">{{ $item->sigla }}</div>
            <div class="nome-materia">{{ $item->nome }}</div>
            <div class="espaco20"></div>

            <table width="100%">
                <thead>
                    <tr>
                        <th class="texto-esquerda">Avaliação</th>
                        <th>Dta Lancto.</th>
                        <th>Nota</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="texto-esquerda">P1</td>
                        <td class="texto-centro">10/04/23</td>
                        <td class="texto-centro">{{ $item->nota->p1 }}</td>
                    </tr>

                    <tr>
                        <td class="texto-esquerda">P2</td>
                        <td class="texto-centro">10/04/23</td>
                        <td class="texto-centro">{{ $item->nota->p2 }}</td>
                    </tr>

                    <tr>
                        <td class="texto-esquerda">P3</td>
                        <td class="texto-centro">10/04/23</td>
                        <td class="texto-centro">0</td>
                    </tr>
                </tbody>
            </table>
            <div class="espaco20"></div>

            <div class="linha"></div>

            <p>Media Final(**): 0</p>
            <p>Qtidade Faltas: {{ $item->falta->falta }}</p>
            <p>% Frequencia: 0,00</p>
        </article>

    @endforeach

    </div>

    <div class="espaco20"></div>
    <h2 class="subtitulo">GRÁFICO DE MÉDIA FINAL</h2>
    <div class="espaco20"></div>

    <div class="box-grafico">
        <div class="titulo-grafico">{{ $item->sigla }} {{ $item->nome }} - 8,0</div>
        <div class="container-grafico">
            <div class="grafico porcentagem_80"></div>
        </div>
    </div>
    

</div>

@endsection