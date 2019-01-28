@extends('layouts.app')
@section('main')
        <ul>
            @foreach($disciplinas as $disciplina)
            <li>
                {{ $disciplina->nome }}
            </li>        
            @endforeach
        </ul>
        <a href="{{ route('disciplinas.create')}}">Cadastrar</a>
        <a href="{{ route('homes.index')}}">Voltar</a>
@endsection  