<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * A user can have many bookmarks
     * 
     * @return Model App\Bookmark
     */
    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }


    /**
     * A User belongs to a Group
     *
     * @return Model App\Group
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }


    /**
     * Checks if a group is assigned to the user
     *
     * @return boolean
     */
    public function hasGroupAssigned()
    {
        return UserGroups::where('user_id', Auth::user()->id)->exists();
       
    }



    /**
     * Gets the name of the group from the id
     *
     * @param int $id
     * 
     * @return string $name
     */
    public function getGroupNameFromId($id)
    {
        $name = \App\Group::find($id)->name;
        return $name;
    }


    /**
     * Gets the user's group name
     *
     * @return string $name
     */
    public function getGroupName()
    {
        $group_id = UserGroups::where('user_id', Auth::user()->id)->first()->group_id;

        $name = Group::find($group_id)->first()->name;

        return $name;
    }
}
