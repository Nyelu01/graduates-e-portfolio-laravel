@extends('layouts.dashboard')
@section('title', 'Home')
@section('content')

@if (session('success'))
<div class="alert alert-success mt-3">
    {{ session('success') }}
</div>
@endif
<div class="analytics">
    <div class="card">
        <div class="card-head">
            <h2>{{ $projects->count() }}</h2>
            <span class="bx bx-package"></span>
        </div>
        <div class="card-progress">
            <small>Total projects</small>
        </div>
    </div>
</div>

<div class="records table-responsive">
    <div class="record-header">
        <div class="add">
            <button><a href="{{ route('projects.create') }}">Post Project</a></button>
        </div>
    </div>

    @if ($projects->isEmpty())
        <p>No projects found.</p>
    @else
        <table width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Project Title</th>
                    <th>Category</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->category }}</td>
                    <td>
                        <a class="btn delete_btn" href="{{ route('projects.destroy', $project->id) }}"
                           onclick="event.preventDefault(); document.getElementById('delete-form-{{ $project->id }}').submit();">
                           Delete
                        </a>
                        <form id="delete-form-{{ $project->id }}" action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                    <td>
                        <a class="btn update_btn" href="{{ route('projects.edit', $project->id) }}">Edit</a>
                    </td>
                    <td>
                        <a class="btn more_btn" href="{{ route('projects.show', $project->id) }}">View More</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
