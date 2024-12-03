@extends('layouts.app')
@section('title')
    Login #05
@endsection
@section('body')
    <h3 class="text-center">Login #05</h3>
    <div class="col-md-5 m-auto mt-5">
        <div class="shadow-lg mb-5 bg-white rounded">
            <img src="{{ asset('assets/img/banner.avif') }}" class="img-fluid rounded-top" alt="banner">
            <div class="container p-5">
                <div class="d-flex bd-highlight">
                    <div class="w-100 bd-highlight">
                        <h2>Sign In</h2>
                    </div>
                    <div class="flex-shrink-1 bd-highlight">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn singin_button shadow-lg m-2">
                                <i class="fa-brands fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn singin_button shadow-lg m-2">
                                <i class="fa-brands fa-twitter"></i>
                            </button>
                        </div>
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
                <form class="mt-4" action="{{ route('login.check') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Username">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-lg btn-block">Sign In</button>
                    <div class="d-flex bd-highlight">
                        <div class="flex-fill bd-highlight">
                            <div class="form-group form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                        <div class="flex-fill bd-highlight">
                            <div class="d-flex justify-content-end">
                                <a href="">Forget Password</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="text-center not_member">Not a member? <a href="" class="sing-up">Sing Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
