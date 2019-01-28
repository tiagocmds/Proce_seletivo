@extends('layouts.app')
@section('main')
<form action="{{ route('turmas.store') }}" method="post">
    {{ csrf_field() }}
    @foreach($disciplinas as $disciplina)
        <input type="radio" name="disciplina_id" value="{{$disciplina->id}}">{{$disciplina->nome}}<br>
    @endforeach 
    @foreach($professores as $professor)
        <input type="radio" name="professor_id" value="{{$professor->id}}">{{$professor->nome}}<br>
    @endforeach 
    <button type="submit">Cadastrar</button>
</form>
@endsection 