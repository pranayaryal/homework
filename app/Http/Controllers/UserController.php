<?php

namespace App\Http\Controllers;

use App\Group;
use App\UserGroups;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * Show all users with the group
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }


    /**
     * show the form to create new users
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

//    /**
//     * show the form to create new users
//     *
//     * @return Response
//     */
//    public function store(User $user)
//    {
//        dd($user);
//    }


    /**
     * Edit a User
     *
     * @return response
     */
    public function edit(User $user)
    {

        return view('users.edit', compact('user'));
    }

    /**
     * Update a user details
     *
     * @return response
     */
    public function update(User $user, Request $request)
    {
        
        $user->update($request->all());

        $users = User::all();
        return view('users.index', compact('users', 'user'));
    }

    /**
     * Delete a user
     *
     * @return response
     */
    public function destroy(User $user)
    {

        $user->delete();
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function addGroupForm()
    {
        $groups = Group::all();
        return view('users.addgroup', compact('groups'));
    }

    /**
     * stores the user group
     *
     * @param Request $request
     * @return Response
     */
    public function storeUserGroup(Request $request)
    {


//        $group_id = Group::find($request['group'])
//                    ->firstOrFail()
//                    ->id;
//
//        dd($group_id);


        $user_id = UserGroups::where('user_id', Auth::user()->id)->first();


        if (!isset($user_id))
        {
            UserGroups::create(['group_id' => $request['group'],
                                'user_id' => Auth::user()->id]);
            
            return redirect('/')->with('success', 'You have a group assigned');
        }


        return redirect('/')->with('flash_message','You already have a group assigned');


        
        
    }
}
