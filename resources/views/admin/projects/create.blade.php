@extends('layouts.admin')

@section('content')
    <form class="w-50 m-auto d-flex flex-column pt-5" action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <label class="mb-3" for="name">Nome Progetto: </label>
        <input type="text" id="name" name="name" class="mb-3">

        <label for="description" class="mb-3">Descrizione : </label>
        <textarea type="text" id="description" name="description" class="mb-3"></textarea>

        <label for="type_id" class="mb-3">Tipo:</label>
        <select name="type_id" id="type_id" class="form-control mb-3">
            <option value="">Seleziona un tipo</option>
            @foreach ($types as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>

        <button class="btn btn-success mt-3">Crea nuovo progetto</button>
    </form>
@endsection
