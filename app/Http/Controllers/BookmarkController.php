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

    /**
     * Show the clicked bookmark with its photo and details.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Bookmark $bookmark)
    {

        $photo = Photo::where('bookmark_id', $bookmark->id)->first();

        return view('bookmarks.show', compact('bookmark', 'photo'));
    }
    

    /**
     * Store the current user's newly created bookmark
     * 
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->checkCategoryId($request);

        $this->validate($request, [
            'name' => 'required | unique:bookmarks',
            'url' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);

        Auth::user()->bookmarks()->create($request->all());

        return $this->showBookmarks();
    }

    

    /**
     * Show the form for editing the bookmark.
     *
     * @param  App\Bookmark
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookmark $bookmark)
    {
        $categories = Category::all();
        
        return view('bookmarks.edit', compact('bookmark', 'categories'));
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
        $this->checkCategoryId($request);

        $bookmark->update($request->all());

        return redirect('bookmarks');
    }
    

    /**
     * Delete the specified bookmark.
     *
     * @param  App\Bookmark
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookmark $bookmark)
    {
        $bookmark->delete();

        return $this->showBookmarks();
    }

    
    /**
     * Show all of the current user's bookmarks
     *
     * @return mixed
     */
    protected function showBookmarks()
    {

        $bookmarks = Auth::user()->bookmarks;

        return view('bookmarks.index', compact('bookmarks'));
    }
    

    /**
     * Checks whether the category_id in the request is set. 
     * If it isn't it sets it to the first listed category.
     * 
     * @param Request $request
     * 
     * @return Request
     */
    protected function checkCategoryId(Request $request)
    {
        //this happens when there is only one category created.
        if (empty($request['category_id']))
        {
            //set the category_id to that of the first category
            $request['category_id'] = Category::all()[0]->id;

            return $request;
        }

        return $request;
    }
}
