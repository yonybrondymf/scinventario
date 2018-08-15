<?php namespace Scinventario\Http\Controllers;

use Scinventario\Http\Requests;
use Scinventario\Http\Controllers\Controller;
use Scinventario\Device;
use Scinventario\Category;
use Scinventario\Location;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Scinventario\Http\Requests\DeviceCreateRequest;
use Scinventario\Http\Requests\DeviceUpdateRequest;

class DeviceController extends Controller {

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
		//dd($request->get('name'));
		$categories = Category::orderBy('name', 'ASC')->lists('name','id');
		$categories = array(''=>"Seleccione Categoria")+ $categories;
		$locations = Location::orderBy('name', 'ASC')->lists('name','id');
		$locations = array(''=>"Seleccione Ubicacion")+ $locations;
		$devices = Device::filterAndPaginate($request->get("name"),$request->get('category'),$request->get('location'));
		$devices->setPath('device');
		
		return view('admin.devices.index',compact('devices','categories','locations'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Category::orderBy('id', 'ASC')->lists('name','id');
		$categories = array(''=>"Seleccione Categoria")+ $categories;
		$locations = Location::orderBy('name', 'ASC')->lists('name','id');
		$locations = array(''=>"Seleccione Ubicacion")+ $locations;
		return view('admin.devices.create',array('categories' => $categories,'locations'=>$locations));
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(DeviceCreateRequest $request)
	{
		//dd($request->all());

		$device = new Device($request->all());
        $device->user_id = \Auth::user()->id;
        $device->save();
		Session::flash('msg_create', 'Se registro un nuevo dispositivo');
		return redirect()->route('device.index');
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
		$categories = Category::orderBy('name', 'ASC')->lists('name','id');
		$categories = array(''=>"Seleccione Categoria")+ $categories;
		$locations = Location::orderBy('name', 'ASC')->lists('name','id');
		$locations = array(''=>"Seleccione Ubicacion")+ $locations;
		$device = Device::findOrFail($id);
		return view('admin.devices.edit',compact('device','categories','locations'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, DeviceUpdateRequest $request)
	{
		$device = Device::findOrFail($id);
		//dd($category);
		$device->fill($request->all());
		$device->save();
		Session::flash('msg_create', 'Se actualizo el dispositivo '.$device->description);
		return redirect()->route('device.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{
		$device = Device::findOrFail($id);

		$device->delete();

		$message = 'El Dispositivo fue eliminado';

		if ($request->ajax()) {
			return response()->json([
				'id' => $device->id,
				'message' => $message
			]);
		}

		Session::flash('message', $message);

		return redirect()->route("device.index");
	}

}
