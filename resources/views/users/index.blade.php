@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Users</div>

                    <div class="panel-body">
                        @foreach($users as $user)
                            <p>{{$user->id}} . {{$user->name}}</p>
                            <a class="btn btn-primary" href="/users/{{$user->id}}/edit" role="button">Edit</a>
                            <a class="btn btn-warning" href="/users" role="button">Destroy</a>


                            <br><br>

                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection