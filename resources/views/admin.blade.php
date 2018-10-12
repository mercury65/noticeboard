@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        @component('components.who')
                        @endcomponent
                    </div>
                    You are logged in as <strong>ADMIN</strong><br>
                    To register other admins.Click below
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                     @if(session()->has('message'))
                        <div class="alert alert-warning">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
