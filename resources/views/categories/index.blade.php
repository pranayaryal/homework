@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">There are {{count($categories)}} categories</div>

                    <div class="panel-body">
                        <p></p>
                        @foreach($categories as $category)
                            <div class="row">
                                <div class="col-md-3">
                                    <p>Name: {{$category->name}}</p>
                                    <p>Description: {{$category->description}}</p>
                                </div>
                                <div class="col-md-1">
                                    <a class="btn btn-primary" href="/categories/{{$category->id}}/edit" role="button">Edit</a>
                                </div>
                                <div class="col-md-1">
                                    <form class="form-horizontal" role="form" action="/categories/{{$category->id}}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {!! csrf_field() !!}

                                        <button type="submit" class="btn btn-warning">{{"Delete"}}</button>
                                    </form>
                                </div>


                            </div>


                            <hr>
                        @endforeach
                        <div class="row">
                            <div class="col-md-3">
                                <a href="/bookmarks/create" class="btn btn-danger">
                                    Create a Bookmark
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection