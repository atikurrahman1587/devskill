@extends('layouts.app')
@section('title')
    Register #05
@endsection
@section('body')
    <h3 class="text-center">Register #05</h3>
    <div class="col-md-5 m-auto mt-5">
        <div class="shadow-lg mb-5 bg-white rounded">
            <img src="{{ asset('assets/img/banner.avif') }}" class="img-fluid rounded-top" alt="banner">
            <div class="container p-5">
                <div class="d-flex bd-highlight">
                    <div class="w-100 bd-highlight">
                        <h2>Sign Up</h2>
                    </div>
                </div>
                <div class="container">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                </div>
                <form class="mt-4" action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation" id="confirm_password" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-lg btn-block">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
@endsection
