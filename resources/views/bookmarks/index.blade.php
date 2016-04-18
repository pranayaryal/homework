@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Bookmarks</div>

                    <div class="panel-body">
                        <p>There are {{count($bookmarks)}} bookmarks</p>
                        @foreach($bookmarks as $bookmark)
                            <div class="row">
                                <div class="col-md-2">
                                    <a href="bookmarks/{{$bookmark->id}}">{{$bookmark->name}}</a>
                                </div>
                                <div class="col-md-1">
                                    <a class="btn btn-primary" href="/bookmarks/{{$bookmark->id}}/edit" role="button">Edit</a>
                                </div>
                                <div class="col-md-1">
                                    <form class="form-horizontal" role="form" action="/bookmarks/{{$bookmark->id}}" method="POST">
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