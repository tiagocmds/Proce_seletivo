@extends('layouts.app')
@section('main')
        <table border='1'>
            <tr>
                <td>Numero</td>
                <td>Nome</td>
            </tr>
            <tr>     
            @foreach($alunos as $aluno)
            <td>
            {{ $aluno->id }}
            </td> 
            <td>
            {{ $aluno->nome }}
            </td>        
            @endforeach
            <tr>
        </table>
        <a href="{{ route('alunos.create')}}">Cadastrar</a>
        <a href="{{ route('homes.index')}}">Voltar</a>
@endsection        
 