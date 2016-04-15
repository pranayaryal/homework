<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\Comparator\Book;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }
}
