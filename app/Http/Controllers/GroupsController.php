<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

use App\Http\Requests;

class GroupsController extends Controller
{


    /**
     * Show all groups
     * 
     * @return mixed
     */
    public function index()
    {
        return $this->showGroups();
    }


    /**
     * Show the form to create a category
     * 
     * @return mixed
     */
    public function create()
    {
        return view('groups.create');
    }


    /**
     * Store the newly created group
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        
        $group = new Group();
       
        $group->create($request->all());

        return $this->showGroups();
    }


    /**
     * Edit a given group
     * 
     * @param Group $group
     * 
     * @return mixed
     */
    public function edit(Group $group)
    {
        return view('groups.edit', compact('group'));
    }


    /**
     * Update a given group
     * 
     * @param Group $group
     * 
     * @param Request $request
     * 
     * @return mixed
     */
    public function update(Group $group, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $group->update($request->all());
        
        return $this->showGroups();
    }


    /**
     * Delete a given group
     * 
     * @param Group $group
     * 
     * @return mixed
     *
     */
    public function destroy(Group $group)
    {
        $group->delete();

        return $this->showGroups();
    }

    /**
     * list all the groups
     * 
     * @return mixed
     */
    public function showGroups()
    {
        $groups = Group::all();

        return view('groups.index', compact('groups'));
    }
}
