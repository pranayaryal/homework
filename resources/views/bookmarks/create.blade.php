@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a Bookmark</div>


                        <div class="panel-body">

                            @if(count($categories)==0)
                                <div class="col-md-6">
                                    <p>Oops! before you create a bookmark you must have a category</p>
                                    <a href="/categories/create">Create One Here</a>
                                </div>

                            @else
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/bookmarks') }}">
                                {!! csrf_field() !!}


                                @include('bookmarks.form')


                                </form>
                            @endif
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection
