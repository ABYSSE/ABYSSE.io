<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Support\Facades\URL;
use App\Models\Category;

class CategoryController extends Controller {

    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = $this->category->orderBy('name')->get();

		return view('categories.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('categories.create', ['from_url' => URL::previous()]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Category $category, CreateCategoryRequest $request)
	{
        $category->create($request->all());

        return redirect($request->from_url);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Category $category)
	{
		return view('categories.edit', compact('category'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Category $category, CreateCategoryRequest $request)
	{
        $category->fill($request->all())->save();

        return redirect()->route('category.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Category $category)
	{
        $category->deleteProjectRelation();
        $category->delete();

        return redirect()->route('category.index');
	}

}
