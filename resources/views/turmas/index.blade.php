@extends('layouts.app')
@section('main')
        <ul>
            @foreach($turmas as $turma)
            <li>
                {{ $turma->id }}
            </li>        
            @endforeach
        </ul>
        <a href="{{ route('turmas.create')}}">Cadastrar</a>
        <a href="{{ route('homes.index')}}">Voltar</a>
@endsection  