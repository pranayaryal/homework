@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::guest()? "Welcome": "Welcome back, " . Auth::user()->name}}</div>

                <div class="panel-body">
                    @if(Auth::guest())
                        <p>Login or Register to continue</p>
                    @endif
                    @if(session('flash_message'))

                        <div class="alert alert-warning">
                            {{ session('flash_message')}}

                        </div>
                    @elseif(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
