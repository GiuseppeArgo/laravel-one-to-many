@extends('layouts.admin')

@section('content')
    <div class="pt-5">
        @include('partials.errors')
    </div>
    <form class="w-50 m-auto d-flex flex-column pt-5"
        action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name" class="mb-1">Nome :</label>
        <input class="form-control mb-3" type="text" id="name" name="name" value="{{ $project->name }}">
        
        <label for="description" class="mb-1">Descrizione :</label>
        <textarea class="form-control p-3 mb-3
        " type="text" id="description" name="description">{{ $project->description }}</textarea>
        
        <label for="type_id" class="mb-1">Tipo:</label>
        <select name="type_id" id="type_id" class="form-control mb-3">
            <option value="">Seleziona una tipo</option>
            @foreach($types as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>
        
        <button class="btn btn-success mt-3" type="submit"><i class="fa-solid fa-plus"></i></button>
    </form>
@endsection
