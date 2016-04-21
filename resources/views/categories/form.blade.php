<div class="form-group{{ $errors->has('name')? ' has-error' : ''}}">
    <label class="col-md-4 control-label">Category Name</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="name" value="{{isset($category->name)? $category->name:""}}">
        @if ($errors->has('name'))
            <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('description')? ' has-error' : ''}}">
    <label class="col-md-4 control-label">Category Description</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="description" value="{{isset($category->description)? $category->description:""}}">
        @if ($errors->has('description'))
            <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
        @endif
    </div>
</div>


<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            {{isset($category)? 'Edit': 'Submit'}}
        </button>
    </div>
</div>