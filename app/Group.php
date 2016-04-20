<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * A group has many users
     *
     * @return Model App\User
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

   
   
}
