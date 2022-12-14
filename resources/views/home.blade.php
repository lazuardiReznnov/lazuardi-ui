@extends('layouts.app') @section('content')

<div class="row justify-content-center">
    <div class="col-md">
        <div class="card">
            <div class="card-header text-bg-primary">{{ __("Dashboard") }}</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session("status") }}
                </div>
                @endif

                {{ __("You are logged in!") }}
            </div>
        </div>
    </div>
</div>

@endsection
