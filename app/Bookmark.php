<?php

namespace App;

use App\Photo;
use Illuminate\Database\Eloquent\Model;


class Bookmark extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'url', 'description', 'category_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * A bookmark can have many photos
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }


    /**
     * A bookmark belongs to a category
     * 
     * @return Model App\Category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * Finds a bookmark for a specified id
     * 
     * @param int $id
     * 
     * @return mixed
     */
    public static function withId($id)
    {
        return static::where(compact('id'))->firstOrFail();
    }


    /**
     * Saves a bookmark's photo
     * 
     * @param \App\Photo $photo
     * 
     * @return Model
     */
    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }
}
