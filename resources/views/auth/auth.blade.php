@extends('layout')

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-6">
                @include('auth.register')
            </div>

            <div class="col-6">
                @include('auth.login')
            </div>
        </div>
    </div>

@endsection
