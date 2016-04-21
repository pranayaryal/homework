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
        
//        $group_name = Auth::user()->getGroupName();

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

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        
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


    /**
     * Shows the form to add a group
     * 
     * @return mixed
     */
    public function addGroupForm()
    {
        $groups = Group::all();
        return view('users.addgroup', compact('groups'));
    }

    /**
     * Stores the newly assigned group
     *
     * @param Request $request
     * 
     * @return Response
     */
    public function storeUserGroup(Request $request)
    {

        $group_name = Auth::user()->getGroupNameFromId($request['group']);

        if (Auth::user()->hasGroupAssigned())
        {
            return redirect('/')
                ->with('flash_message','You already have a group assigned which is: ' . $group_name);
        }

        UserGroups::create(['group_id' => $request['group'],
                            'user_id' => Auth::user()->id]);

        return redirect('/')->with('success', 'You group is: ' . $group_name);




        


    }
}
