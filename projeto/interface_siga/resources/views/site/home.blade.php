@extends('site.master.layout')

@section('titulo')
Home
@endsection

@section('content')

<h2>Home</h2>
<div class="conteudo-principal">
    <div class="aviso-erro">Prazo para encerramento da matricula até dia 01/02</div>
    <h3 class="home-noticias">Ultimas Noticias</h3>

    <div class="home-banner">
        <img src="{{ Vite::asset('resources/images/banner1 (1).jpg') }}" alt="Person" width="360" height="450">
        <img src="{{ Vite::asset('resources/images/banner1 (2).jpg') }}" alt="Person" width="360" height="450">
    </div>

   
              
</div>

@endsection