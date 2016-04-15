@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <p>Do you want to add a bookmark?</p>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/bookmarks') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label class="col-md-4 control-label">Bookmark Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="bookmark">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Bookmark Url</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="url">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="description">Description:</label>
                            <div class="col-md-6">
                                <textarea type="text" name="description" id="description" class="form-control" rows=3>{{old('description')}}</textarea>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="file">Upload image</label>
                            <input type="file" id="file" name="file">

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
