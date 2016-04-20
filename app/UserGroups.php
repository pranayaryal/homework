<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserGroups extends Model
{
    protected $fillable = ['user_id', 'group_id'];

    
}
