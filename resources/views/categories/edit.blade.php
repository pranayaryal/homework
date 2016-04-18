@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        <p>category</p>
                        <form class="form-horizontal" role="form" method="POST" action="/categories/{{$category->id}}">
                            {{ method_field('PATCH') }}
                            {!! csrf_field() !!}
                            @include('categories.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection