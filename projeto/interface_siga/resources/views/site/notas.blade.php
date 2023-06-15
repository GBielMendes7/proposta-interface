@extends('site.master.layout')

@section('titulo')
Iniciar
@endsection

@section('content')

<h2>Notas parciais</h2>
<div class="conteudo-principal">
    <div class="flex-centro">

    @foreach ($nota as $item)

        <article class="box-materia">
            <div class="sigla">{{ $item->materia->sigla }}</div>
            <div class="nome-materia">{{ $item->materia->nome }}</div>
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
                        <td class="texto-centro">{{ $item->nota_p1 }}</td>
                    </tr>

                    <tr>
                        <td class="texto-esquerda">P2</td>
                        <td class="texto-centro">10/04/23</td>
                        <td class="texto-centro">{{ $item->nota_p2 }}</td>
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
            

            @php
                $media = ($item->nota_p1 + $item->nota_p2) / 2;

                $total = $item->falta->presenca + $item->falta->falta;
                $frequencia = $total > 0 ? round(($item->falta->presenca / $total) * 100, 2) : 0;
            @endphp

        <p>Media Final(**): {{ $media }}</p>
        <p>Qtidade Faltas: {{ $item->falta->falta }}</p>
        <p>% Frequencia: {{ $frequencia }}</p>
        </article>

    @endforeach

    </div>

    <div class="espaco20"></div>
    <h2 class="subtitulo">GRÁFICO DE MÉDIA FINAL</h2>
    <div class="espaco20"></div>

    @foreach ($nota as $item)
    
    <div class="box-grafico">
            @php
                $media = ($item->nota_p1 + $item->nota_p2) / 2;
            @endphp
        <div class="titulo-grafico" data-value="{{ $media }}">{{ $item->materia->sigla }} {{ $item->materia->nome }} - {{ $media }}</div>
        <div class="container-grafico">
            <div class="grafico porcentagem_80"></div>
        </div>
    </div>

    @endforeach
    

</div>

@endsection