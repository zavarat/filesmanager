@extends('layouts.app')

@section('js')
<script src="{{ asset('/js/fileUploader.js') }}" type="text/javascript"></script>
@endsection

@section('css')
<link href="{{ asset('/css/welcome.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-md-12" id="fileUploader">
                    <div class="DashboardContainer"></div>
                </div>
            </div>
        </div>
    </div>
@endsection