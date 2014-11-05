<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Project;
use App\Libraries\Facades\Tree;
use App\Http\Requests\CreateProjectRequest;

class ProjectController extends Controller {

    private $project;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $projects = $this->project->get();

		return view('projects.index', compact('projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $parentSelect = Tree::toHTMLSelect(Tree::toArray($this->project->get()->toArray()));

		return view('projects.create', compact('parentSelect'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
     * @param  Project $project
     * @param  CreateProjectRequest $request
	 * @return Response
	 */
	public function store(Project $project, CreateProjectRequest $request)
	{
        $project->create($request->all());

        redirect()->route('project.show', ['id' => $project->id]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Project $project
	 * @return Response
	 */
	public function show(Project $project)
	{
        return view('projects.show', compact('project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Project $project
	 * @return Response
	 */
	public function edit(Project $project)
	{
        $parentSelect = Tree::toHTMLSelect(Tree::toArray($project->get()->toArray(), 0, [$project->id]), $project->parent_id);

		return view('projects.edit', compact('project', 'parentSelect'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Project $project
     * @param  CreateProjectRequest $request
	 * @return Response
	 */
	public function update(Project $project, CreateProjectRequest $request)
	{
        if ($request->input('parent_id') != $project->parent_id)
            if (!empty(Tree::toArray($project->get()->toArray())[$project->id - 1]['children']))
                return Redirect::route('project.edit', ['id' => $project->id]);

		$project->fill($request->all())->save();

        return redirect()->route('project.edit', ['id' => $project->id]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Project $project
	 * @return Response
	 */
	public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index');
    }

}
