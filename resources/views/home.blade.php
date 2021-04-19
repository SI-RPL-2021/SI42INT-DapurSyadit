@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <div class="d-flex justify-content-center">
                        <p class="text-muted">Sorry, we're out of stock. Check back later!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection