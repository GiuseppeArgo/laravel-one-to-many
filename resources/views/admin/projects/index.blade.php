@extends('layouts.admin')

@section('content')
    <div>
    <div class="d-flex justify-content-between align-items-center mt-5 mb-5">
        <h1>I tuoi progetti</h1>
        <a class="btn btn-secondary" href="{{ route('admin.projects.create') }}">Crea nuovo progetto</a>
    </div>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Tipo</th>
                    <th>Description</th>
                    <th>Slug</th>
                    <th>Opzioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->type ? $project->type->name : '' }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}"
                                class="btn btn-info mb-1">Dettagli</a>
                            <a href="{{ route('admin.projects.edit', ['project' =>$project->slug]) }}"
                                class="btn btn-primary mb-1">Modifica</a>
                            <form action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
