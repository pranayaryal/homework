<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Response;

class UserController extends Controller
{

    /**
     * Show all users.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', ['users' => $users]);
    }


    /**
     * Create new users using the register form.
     *
     * @return Response
     */
    public function create()
    {
        return view('auth.register');
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
        $user->update($request->all());
        return redirect('users.index');
    }

    /**
     * Delete a user
     *
     * @return response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('users.index');
    }
}
