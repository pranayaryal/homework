<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

use App\Http\Requests;

class GroupsController extends Controller
{

    public function index()
    {
        $groups = Group::all();
        
        return view('groups.index');
    }

    public function create()
    {
        return view('groups.form');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function edit(Group $group)
    {
        return view('groups.edit', compact('group'));
    }

    public function update(Group $group, Request $request)
    {
        $group->update($request->all());
        return redirect('groups.index');
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return redirect('groups.index');
    }
}
