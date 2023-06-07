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

    <div class="faltas">
  <table>
    <tr>
      <td class="conteudo_falta">AGO005</td>
      <td class="conteudo_falta">Gestão de Projetos</td>
      <td class="conteudo_falta" data-value="40">40</td>
      <td class="conteudo_falta">10</td>
      <td class="conteudo_falta"><span class="material-icons-outlined">school</span></td>
    </tr>
  </table>
  <div class="progress-container">
    <div class="progress-bar"></div>
  </div>
</div>

<div class="faltas">
  <table>
    <tr>
      <td class="conteudo_falta">AGO005</td>
      <td class="conteudo_falta">Gestão de Projetos</td>
      <td class="conteudo_falta" data-value="60">60</td>
      <td class="conteudo_falta">10</td>
      <td class="conteudo_falta"><span class="material-icons-outlined">school</span></td>
    </tr>
  </table>
  <div class="progress-container">
    <div class="progress-bar"></div>
  </div>
</div>

<div class="faltas">
  <table>
    <tr>
      <td class="conteudo_falta">AGO005</td>
      <td class="conteudo_falta">Gestão de Projetos</td>
      <td class="conteudo_falta" data-value="65">65</td>
      <td class="conteudo_falta">10</td>
      <td class="conteudo_falta"><span class="material-icons-outlined">school</span></td>
    </tr>
  </table>
  <div class="progress-container">
    <div class="progress-bar"></div>
  </div>
</div>

    



</div>


@endsection