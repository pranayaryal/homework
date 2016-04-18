<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

use App\Http\Requests;

class GroupsController extends Controller
{

    public function index()
    {
        return $this->showGroups();
    }

    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {
        $group = new Group();
        $group->create($request->all());

        return $this->showGroups();
    }

    public function edit(Group $group)
    {
        return view('groups.edit', compact('group'));
    }

    public function update(Group $group, Request $request)
    {
        $group->update($request->all());
        
        return $this->showGroups();
    }

    public function destroy(Group $group)
    {
        $group->delete();

        return $this->showGroups();
    }

    /**
     * list all the groups
     * @return mixed
     */
    public function showGroups()
    {
        $groups = Group::all();

        return view('groups.index', compact('groups'));
    }
}
