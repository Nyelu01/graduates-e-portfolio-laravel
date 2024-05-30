@extends('layouts.dashboard')
@section('title', 'Home')
@section('content')

<div class="analytics">
    <div class="card">
        <div class="card-head">
            <h2>0</h2>
            <span class="bx bx-package"></span>
        </div>
        <div class="card-progress">
            <small>Total projects</small>
        </div>
    </div>

    <div class="card">
        <div class="card-head">
            <h2>0</h2>
            <span class="bx bx-group"></span>
        </div>
        <div class="card-progress">
            <small>Total candidates</small>
        </div>
   </div>
</div>

<div class="records table-responsive">
    <div class="record-header">
        <div class="browse">
            <input type="search" placeholder="Search" class="record-search">
        </div>
    </div>
<div>
</div>
</main>

@endsection
