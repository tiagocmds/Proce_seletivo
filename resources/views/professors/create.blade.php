@extends('layouts.app')
@section('main')
<form action="{{ route('professors.store') }}" method="post">
    {{ csrf_field() }}
    <label for="nome">Nome do Professor</label>
    <input type="teste" name="nome">
    <button type="submit">Cadastrar</button>
</form>
@endsection 