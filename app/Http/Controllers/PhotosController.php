<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Photo;
use App\Bookmark;
use App\Http\Requests;
use App\Http\Requests\AddPhotoRequest;
use SebastianBergmann\Comparator\Book;

class PhotosController extends Controller
{


    /**
     * Saves a photo to a bookmark
     * 
     * @param Bookmark $bookmark
     * 
     * @param AddPhotoRequest $request
     */
    public function store(Bookmark $bookmark, AddPhotoRequest $request)
    {
        
        $photo = Photo::fromFile($request->file('file'));


        Bookmark::withId($bookmark->id)->addPhoto($photo);
    }
}
