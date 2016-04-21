
<div class="form-group{{ $errors->has('name')? ' has-error' : ''}}">
    <label class="col-md-4 control-label">Bookmark Name</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="name" value="{{isset($bookmark->name)? $bookmark->name:""}}">
        @if ($errors->has('name'))
            <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('url')? ' has-error' : ''}}">
    <label class="col-md-4 control-label">Bookmark Url</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="url" value="{{isset($bookmark->url)? $bookmark->url:""}}">
        @if ($errors->has('url'))
            <span class="help-block">
            <strong>{{ $errors->first('url') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('description')? ' has-error' : ''}}">
    <label class="col-md-4 control-label" for="description">Description:</label>
    <div class="col-md-6">
        <textarea type="text" name="description"  class="form-control" rows=3
                  value="{{isset($bookmark->description)? $bookmark->description:""}}"></textarea>

        @if ($errors->has('description'))
            <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
        @endif
    </div>

</div>

<div class="form-group">
    <label for="" class="col-md-4 control-label">Category</label>
        <div class="col-md-6">
            <select name="" id="categoryselect" class="form-control">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

    <input type="hidden" class="form-control" id="categoryinput" name="category_id" value="">

    </div>
</div>


<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </div>
</div>
