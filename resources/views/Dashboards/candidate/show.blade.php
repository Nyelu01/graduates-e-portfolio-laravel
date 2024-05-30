@extends('layouts.dashboard')
@section('title', 'Project Details')
@section('content')
<div class="container-2">
    <h3 class="form-title">{{ $project->title }}</h3>
    <div class="project-details">
        <p><strong>Category:</strong> {{ $project->category }}</p>
        <p><strong>Description:</strong> {{ $project->description }}</p>
        <div class="project-images">
            <h4>Images:</h4>
            @foreach($project->images as $image)
            <img src="{{ asset('storage/' . $image->url) }}" class="img-fluid img-thumbnail" width="150" alt="Project Image">
            @endforeach
        </div>
    </div>
</div>
@endsection
