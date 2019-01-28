@extends('layouts.app')
@section('main')
<form action="{{ route('alunos.store') }}" method="post">
    {{ csrf_field() }}
    <label for="nome">Nome do Aluno</label>
    <input type="teste" name="nome">
    <button type="submit">Cadastrar</button>
</form>
@endsection   