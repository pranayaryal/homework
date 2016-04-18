<div class="form-group">
    <label class="col-md-4 control-label">Category Name</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="name" value="{{isset($category->name)? $category->name:""}}">

    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Category Description</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="description" value="{{isset($category->description)? $category->description:""}}">

    </div>
</div>


<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            {{isset($category)? 'Edit': 'Submit'}}
        </button>
    </div>
</div>