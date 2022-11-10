{{ App::setLocale(session('locale')) }}

@include('partials.topbar')

@include('partials.sidebar')

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! This page is in development!
                    <br> <br>
                    <a href="{{ url('/') }}"> Back to the welcome page <a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</script>
