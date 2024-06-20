<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $projectList = Project::orderBy('finish_date','desc')->get();

        foreach ($projectList as $project) {
            $project['start_date'] = date_format(new DateTime($project['start_date']), 'd/m/y');
            $project['finish_date'] = date_format(new DateTime($project['finish_date']), 'd/m/y');
        }
        return view('admin.projects.index', compact('projectList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $newProject = new Project();
        $newProject->fill($request->all());
        $newProject->slug = Str::slug($newProject->title);
        $newProject->save();
        return redirect()->route('admin.project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
