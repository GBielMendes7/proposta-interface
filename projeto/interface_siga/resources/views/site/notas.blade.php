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

            <p>Media Final(**): 0</p>
            <p>Qtidade Faltas: {{ $item->materia->falta }}</p>
            <p>% Frequencia: 0,00</p>
        </article>

    @endforeach

    </div>

    <div class="espaco20"></div>
    <h2 class="subtitulo">GRÁFICO DE MÉDIA FINAL</h2>
    <div class="espaco20"></div>

    @foreach ($nota as $item)
    
    <div class="box-grafico">
        <div class="titulo-grafico" data-value="80">{{ $item->materia->sigla }} {{ $item->materia->nome }} - 8,0</div>
        <div class="container-grafico">
            <div class="grafico porcentagem_80"></div>
        </div>
    </div>

    @endforeach
    

</div>

@endsection