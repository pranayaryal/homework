<?php

namespace App\Http\Controllers;

use App\Bookmark;
use App\Category;
use App\Photo;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use SebastianBergmann\Comparator\Book;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the bookmarks.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return $this->showBookmarks();
    }

    /**
     * Show the form for creating a bookmark.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('bookmarks.create', compact('categories'));
    }

    public function show(Bookmark $bookmark)
    {

        $photo = Photo::where('bookmark_id', $bookmark->id)->first();
//        $path = $photo->thumbnail_path;
        return view('bookmarks.show', compact('bookmark', 'photo'));
    }

    /**
     * Store a newly created bookmark in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookmark = new Bookmark();
        $bookmark->create($request->all());
        
        return $this->showBookmarks();
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Bookmark
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookmark $bookmark)
    {
        return view('bookmarks.edit', compact('bookmark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Bookmark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookmark $bookmark)
    {
        $bookmark->update($request->all());

        return $this->showBookmarks();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Bookmark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookmark $bookmark)
    {
        $bookmark->delete();

        return $this->showBookmarks();
    }

    /**
     * @return mixed
     */
    protected function showBookmarks()
    {
        $bookmarks = Bookmark::all();

        return view('bookmarks.index', compact('bookmarks'));
    }
}
