@extends('layouts.dashboard')
@section('title', 'Create Project')
@section('content')
<div class="container-2">
    <h3 class="form-title">Edit Project</h3>

    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="main-user-info">
            <div class="user-input-box">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" required>
            </div>
            <div class="user-input-box">
                <label for="category">Category</label>
                <select  id="category" name="category" required>
                    <option value="" selected disabled>Select project category</option>
                    <option value="engineering" {{ $project->category == 'engineering' ? 'selected' : '' }}>Engineering</option>
                    <option value="iot" {{ $project->category == 'iot' ? 'selected' : '' }}>IOT</option>
                    <option value="information_systems" {{ $project->category == 'information_systems' ? 'selected' : '' }}>Information System Projects</option>
                    <option value="others" {{ $project->category == 'others' ? 'selected' : '' }}>Others</option>
                </select>
            </div>
            <div class="user-input-box">
                <label for="description">Project Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" required>{{ $project->description }}</textarea>
            </div>
            <div class="user-input-box">
                <label for="images">Images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*">
            </div>
            <div>
                <h5>Current Images:</h5>
                    @foreach($project->images as $image)
                            <img src="{{ asset('storage/' . $image->url) }}" class="img-fluid img-thumbnail" width="150" alt="Project Image">
                    @endforeach
            </div>
        <div class="form-btn">
            <button type="submit" class="form-submit-btn">Update Project</button>
        </div>
    </form>
</div>
@endsection
