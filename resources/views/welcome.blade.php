@extends('layouts.main')

@section('title', 'Pael Demands')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if ($search)
    <h2>sua busca foi:{{ $search }}</h2>
    @else
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    @endif
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/y', strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                 
            </div>
        </div>
        @endforeach
        @if(count($events) ==0 && $search)
            <p>Não foi possivel achar um evento com o nome {{ $search }}! <a href="/">Veja os que estão disponiveis!!</a></p>
            @elseif(count($events) ==0)
            <p>Não há eventos disponiveis</p>
        @endif
    </div>
</div>

@endsection