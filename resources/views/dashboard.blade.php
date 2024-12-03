@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@section('body')
    <h3 class="text-center">Welcome To Dashboard</h3>
    <div class="col-md-5 m-auto mt-5">
        <div class="shadow-lg mb-5 bg-white rounded">
            <div class="container p-5">
                <div class="col-md-12">
                    <p class="text-center not_member"><a href="{{ route('register') }}" class="sing-up">Create New User</a></p>
                </div>
                <div class="col-md-12">
                    <p class="text-center not_member"><a href="{{ route('logout') }}" class="sing-up">Logout</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
