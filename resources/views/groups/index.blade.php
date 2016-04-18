@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Groups</div>

                    <div class="panel-body">
                        <p>There are {{count($groups)}} groups</p>
                        @foreach($groups as $group)

                            <p>{{$group->id}} . {{$group->name}}</p>
                            <a class="btn btn-primary" href="/groups/{{$group->id}}/edit" role="button">Edit</a>
                            <form class="form-horizontal" role="form" action="/groups/{{$group->id}}" method="POST">
                                {{ method_field('DELETE') }}
                                {!! csrf_field() !!}

                                <button type="submit" class="btn btn-warning">{{"Delete"}}</button>
                            </form>
                            <br><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection