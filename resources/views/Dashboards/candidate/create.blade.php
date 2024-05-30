@extends('layouts.dashboard')
@section('title', 'Create Project')
@section('content')
<div class="container-2">
    <h3 class="form-title">Create New Project</h3>
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="main-user-info">
            <div class="user-input-box">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="user-input-box">
                <label for="category">Category</label>
                <select id="category" name="category" required>
                    <option value="" selected disabled>Select project category</option>
                    <option value="engineering">Engineering</option>
                    <option value="iot">IOT</option>
                    <option value="information_systems">Information System Projects</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div class="user-input-box">
                <label for="description">Project Description</label>
                <textarea id="description" name="description" rows="5" required></textarea>
            </div>
            <div class="user-input-box">
                <label for="images">Images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*">
            </div>
        </div>
        <div class="form-btn">
            <button type="submit" class="form-submit-btn">Post Project</button>
        </div>
    </form>
</div>
@endsection
