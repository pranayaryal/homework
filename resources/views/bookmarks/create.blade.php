@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a Bookmark</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/bookmarks') }}">
                            {!! csrf_field() !!}
                            @include('bookmarks.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
