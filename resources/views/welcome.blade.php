@extends('layouts.app')
@section('main')
<a href="{{ route('alunos.index')}}">Alunos</a>
<a href="{{ route('professors.index')}}">Professores</a>
<a href="{{ route('disciplinas.index')}}">Disciplinas</a>
@endsection 
