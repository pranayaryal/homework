@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">There are {{count($users)}} users</div>

                    <div class="panel-body">
                        @foreach($users as $user)
                            <div class="row">
                                <div class="col-md-2">
                                    <p>Name: {{$user->name}}</p>
                                    <p>Group: {{$user->getGroupName()}}</p>

                                </div>
                                <div class="col-md-1">
                                    <a class="btn btn-primary" href="/users/{{$user->id}}/edit" role="button">Edit</a>
                                </div>
                                <div class="col-md-1">
                                    <form class="form-horizontal" role="form" action="/users/{{$user->id}}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {!! csrf_field() !!}

                                        <button type="submit" class="btn btn-warning">{{"Delete"}}</button>


                                    </form>
                                </div>

                            </div>






                            <hr>

                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection