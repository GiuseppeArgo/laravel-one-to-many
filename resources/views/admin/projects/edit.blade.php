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
        <label for="description" class="mb-1">Descrizione :

        </label>
        <textarea class="form-control p-3
        " type="text" id="description" name="description">{{ $project->description }}</textarea>
        <button class="btn btn-success mt-3" type="submit"><i class="fa-solid fa-plus"></i></button>
    </form>
@endsection
