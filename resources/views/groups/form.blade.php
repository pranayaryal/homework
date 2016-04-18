
<div class="form-group">
    <label class="col-md-4 control-label">Group Name</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="name" value="{{isset($group->name)? $group->name:""}}">

    </div>
</div>


<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            {{isset($group)? 'Edit': 'Submit'}}
        </button>
    </div>
</div>


