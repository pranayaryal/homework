@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Select a Group</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/group/add">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Group</label>
                                <div class="col-md-6">
                                    <select name="" id="groupselect" class="form-control">
                                        @foreach($groups as $group)
                                            <option value="{{$group->id}}">{{$group->name}}</option>
                                        @endforeach
                                    </select>

                                    <input type="hidden" class="form-control" id="group_id_input" name="group" value="">

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{isset($category)? 'Edit': 'Submit'}}
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
