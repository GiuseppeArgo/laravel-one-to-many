@extends('layouts.admin')

@section('content')
<form class="w-50 m-auto d-flex flex-column pt-5" action="{{ route('admin.projects.store') }}" method="POST">
    @csrf
    <label for="name">Nome Progetto: </label>
    <input type="text" id="name" name="name">
    <label for="description">Descrizione : </label>
    <textarea type="text" id="description" name="description"></textarea>
    <button class="btn btn-success mt-3">Crea nuovo progetto</button>
</form>
@endsection