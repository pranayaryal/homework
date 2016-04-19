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
    protected $fillable = ['name', 'url', 'description', 'category'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function withId($id)
    {
        return static::where(compact('id'))->firstOrFail();
    }

    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }
}
