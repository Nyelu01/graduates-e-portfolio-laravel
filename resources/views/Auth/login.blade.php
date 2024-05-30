@extends('layouts.app')
@extends('layouts.navbar')
@section('title', 'login')
@section('content')
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <div class="card-body">
            <h2 class="card-title mb-5">Log in</h2>
            <form action="{{ route('user.login') }}" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name ="email" class="form-control" type="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" class="form-control" type="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-block submit-button">login</button>
                {{-- <div class="d-flex flex-column text-center px-5 mt-3 mb-3">
                    <small class="agree-text">Already have an account?<a href="{{route('user.register')}}" class="terms">register</a></small>

                </div> --}}
            </form>
            <!-- <div class="d-flex flex-column text-center px-5 mt-3 mb-3">
                <small class="agree-text">Don't have an account?<a href="#" class="terms">sign up</a></small>

            </div> -->
        </div>
    </div>
</div>
@endsection
