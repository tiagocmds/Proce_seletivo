@extends('layouts.app')
@section('main')
<form action="{{ route('disciplinas.store') }}" method="post">
    {{ csrf_field() }}
    <label for="nome">Nome da Disciplina</label>
    <input type="teste" name="nome">
    <button type="submit">Cadastrar</button>
</form>
@endsection   