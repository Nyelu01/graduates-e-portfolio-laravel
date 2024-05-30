@extends('layouts.app')
@extends('layouts.navbar')
@section('title', 'Register')
@section('content')
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <div class="card-body">
            <h2 class="card-title mb-5">Register here</h2>
            <form action="{{ route('register') }}" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name"class="form-control" type="text" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name ="email" class="form-control" type="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input name="phone" class="form-control" type="text" placeholder="Mobile">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" class="form-control" type="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input name="cpassword" class="form-control" type="password" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <label for="university">University</label>
                    <input name="university" class="form-control" type="text" placeholder="university">
                </div>
                <div class="form-group">
                    <select name="role" class="form-control">
                        <option value="0">Candidate</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-block submit-button">Sign Up</button>
            </form>
            <div class="d-flex flex-column text-center px-5 mt-3 mb-3">
                <small class="agree-text">Already have an account? <a href="{{ route('login') }}" class="terms">Login</a></small>
            </div>
        </div>
    </div>
</div>
@endsection
