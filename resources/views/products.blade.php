@extends('layouts.main')

@section('title', 'Produtos')

@section('content')


    <h1>Tela de produtos</h1>

    @if ($busca != '')
        <p>O usuario esta buscando por produto{{ $busca }}</p>
    @endif

    <a href="/">voltai nego</a>
@endsection