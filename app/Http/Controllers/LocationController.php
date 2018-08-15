<?php namespace Scinventario\Http\Controllers;

use Scinventario\Http\Requests;
use Scinventario\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Scinventario\Location;
use Scinventario\Http\Requests\LocationCreateRequest;
use Scinventario\Http\Requests\LocationUpdateRequest;
use Illuminate\Support\Facades\Session;

class LocationController extends Controller {

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
		$locations = Location::name($request->get("name"))->paginate(10);
		$locations->setPath('category');
		return view('admin.locations.index',compact('locations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("admin.locations.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(LocationCreateRequest $request)
	{
		Location::create($request->all());
		Session::flash('msg_create', 'Se registro la ubicacion '.$request->input('name'));
		return redirect()->route('location.index');
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
		$location = Location::findOrFail($id);
		return view('admin.locations.edit',compact('location'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,LocationUpdateRequest $request)
	{
		$location =  Location::findOrFail($id);
		//dd($category);
		$location->fill($request->all());
		$location->save();
		Session::flash('msg_create', 'Se actualizo la ubicacion '.$location->name);
		return redirect()->route('location.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id , Request $request)
	{
		$location = Location::findOrFail($id);

		$location->delete();

		$message = 'La Ubicacion '. $location->name .' fue eliminado';

		if ($request->ajax()) {
			return response()->json([
				'id' => $location->id,
				'message' => $message
			]);
		}

		Session::flash('message', $message);

		return redirect()->route("location.index");
	}

}
