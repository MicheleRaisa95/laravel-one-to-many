@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="header-page d-flex justify-content-between align-items-center mb-5 ">
        <h1>{{ $project->title }}</h1>
    </div>

    @if($project->type)
        <p>Tipologia: {{ $project->type->name }}</p>
    @endif

    <p>
        {{ $project->description }}
    </p>
    <a class="btn btn-light" href="{{ route('projects.index') }}">Torna alla lista dei progetti</a>
</div>
@endsection
