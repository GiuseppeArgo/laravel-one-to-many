@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mt-5">Titolo: {{ $project->name }}</h1>
        <p class="mt-5">Descrizione: {{ $project->description }}</p>
        <p class="mt-5">Slug: {{ $project->slug }}</p>
        @if($project->type)
        <p>Tipo: {{ $project->type->name }}</p>
        @endif
    </div>
@endsection