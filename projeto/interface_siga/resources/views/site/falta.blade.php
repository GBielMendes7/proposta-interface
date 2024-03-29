@extends('site.master.layout')

@section('titulo')
Iniciar
@endsection

@section('content')

<h2>Faltas parciais</h2>
<div class="conteudo-principal">

  <div class="cabecalho-falta">
    <table>
      <tr>
        <th class="falta-cabecalho">Sigla</th>
        <th class="falta-cabecalho">Disciplina</th>
        <th class="falta-cabecalho">Presenças</th>
        <th class="falta-cabecalho">Ausências</th>
        <th class="falta-cabecalho">Mais</th>
      </tr>
    </table>
  </div>

  @foreach ($falta as $item)
  <div class="faltas">
    <table>
      <tr>
        <td class="conteudo_falta">{{ $item->materia->sigla }}</td>
        <td class="conteudo_falta">{{ $item->materia->nome }}</td>
        <td class="conteudo_falta" data-value="{{ $item->presenca }}">{{ $item->presenca }}</td>
        <td class="conteudo_falta">{{ $item->falta }}</td>
        <td class="conteudo_falta"><span class="material-icons-outlined">school</span></td>
      </tr>
    </table>
    <div class="progress-container">
      <div class="progress-bar"></div>
    </div>
  </div>
    

  @endforeach

  








</div>


@endsection