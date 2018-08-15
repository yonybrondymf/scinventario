<?php namespace Scinventario\Http\Controllers;

use Scinventario\Http\Requests;
use Scinventario\Http\Controllers\Controller;
use Scinventario\Category;
use Illuminate\Http\Request;
use Scinventario\Http\Requests\CategoryCreateRequest;
use Scinventario\Http\Requests\CategoryUpdateRequest;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$categories = Category::name($request->get("name"))->paginate(10);
		$categories->setPath('category');
		return view('admin.categories.index',compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("admin.categories.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CategoryCreateRequest $request)
	{
		//dd($request->input(''));
		Category::create($request->all());
		Session::flash('msg_create', 'Se registro la categoria '.$request->input('name'));
		return redirect()->route('category.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = Category::findOrFail($id);
		return view('admin.categories.edit',compact('category'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CategoryUpdateRequest $request)
	{
		$category =  Category::findOrFail($id);
		//dd($category);
		$category->fill($request->all());
		$category->save();
		Session::flash('msg_create', 'Se actualizo la categoria '.$category->name);
		return redirect()->route('category.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{
		$category = Category::findOrFail($id);

		$category->delete();

		$message = 'La categoria '. $category->name .' fue eliminado';

		if ($request->ajax()) {
			return response()->json([
				'id' => $category->id,
				'message' => $message
			]);
		}

		Session::flash('message', $message);

		return redirect()->route("category.index");
	}

}
