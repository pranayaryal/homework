


<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Name</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="name" value="{{isset($user->name)? $user->name: ""}}">

        @if ($errors->has('name'))
            <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">E-Mail Address</label>

    <div class="col-md-6">
        <input type="email" class="form-control" name="email" value="{{ isset($user->email)? $user->email: "" }}">

        @if ($errors->has('email'))
            <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Password</label>

    <div class="col-md-6">
        <input type="password" class="form-control" name="password">

        @if ($errors->has('password'))
            <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Confirm Password</label>

    <div class="col-md-6">
        <input type="password" class="form-control" name="password_confirmation">

        @if ($errors->has('password_confirmation'))
            <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
        </span>
        @endif
    </div>
</div>


{{--<div class="form-group">--}}
    {{--<label for="" class="col-md-4 control-label">Group</label>--}}
    {{--<div class="col-md-6">--}}
        {{--<select name="" id="groupselect" class="form-control">--}}
            {{--@foreach($groups as $group)--}}
                {{--<option value="{{$group->name}}">{{$group->name}}</option>--}}
            {{--@endforeach--}}
        {{--</select>--}}

        {{--<input type="hidden" class="form-control" id="groupinput" name="group" value="">--}}

    {{--</div>--}}
{{--</div>--}}

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            {{isset($user)? "Edit": "Register"}}
        </button>
    </div>
</div>

