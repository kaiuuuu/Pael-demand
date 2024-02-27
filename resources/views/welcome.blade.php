@extends('layouts.main')

@section('title', 'Pael Demands')

@section('content')

        <h1>algum titulo</h1>
        <img src="/img/1.jpg" alt="Banner">
        @if(10 > 15)
        <p>true da true meu nego</p>
        @endif
        
        <p>{{ $nome }}</p>
        @if ($nome == "pedro")
        <p>O nome é pedro</p>
        @elseif($nome == "kaiuuu")
        <p>O nome é {{ $nome }}, e ele tem {{ $idade }} anos e ele trabalha com {{ $trabalho }}.</p>
        @else
        <p>O nome não é pedro</p>
        @endif

        @for ($i =0; $i < count($arr); $i++)
              <p> {{ $arr[$i] }} - {{ $i }} </p>
              @if ($i ==2)
              <p>O i é 2</p>
              @endif
        @endfor

        @foreach ($nomes as $nome)
              <p>{{ $loop->index }}</p>  
              <p>{{ $nome }}</p>
        @endforeach

        @php
            $nome = "vini";
            echo $nome;
        @endphp
@endsection