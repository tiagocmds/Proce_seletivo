@extends('layouts.app')
@section('main')
        <table border='1'>
            <tr>
                <td>Numero</td>
                <td>Nome</td>
            </tr>
            <tr>     
            @foreach($professors as $professor)
            <td>
            {{ $professor->id }}
            </td> 
            <td>
            {{ $professor->nome }}
            </td>        
            @endforeach
            </tr>
        </table>
        <a href="{{ route('professors.create')}}">Cadastrar</a>
        <a href="{{ route('homes.index')}}">Voltar</a>
@endsection   