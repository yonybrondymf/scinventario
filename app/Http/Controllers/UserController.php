<?php namespace Scinventario\Http\Controllers;

use Scinventario\Http\Requests;
use Scinventario\Http\Controllers\Controller;
use Scinventario\User;
use Illuminate\Http\Request;
use Scinventario\Http\Requests\UserCreateRequest;
use Scinventario\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Session;

class UserController extends Controller {

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
		$users = User::name($request->get("name"))->paginate(10);
		$users->setPath('user');
		return view('admin.users.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("admin.users.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserCreateRequest $request)
	{
		User::create($request->all());
		Session::flash('msg_create', 'Se registro una  nuevo Usuario');
		return redirect()->route('user.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return view('admin.users.edit',compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UserUpdateRequest $request)
	{
		//dd($request->all());
		$user =  User::findOrFail($id);
		//dd($category);
		$user->fill($request->all());
		$user->save();
		Session::flash('msg_create', 'Se Actualizo el Usuario '.$user->name);
		return redirect()->route('user.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{
		$user = User::findOrFail($id);

		$user->delete();

		$message = 'El Usuario '. $user->name .' fue eliminado';

		if ($request->ajax()) {
			return response()->json([
				'id' => $user->id,
				'message' => $message
			]);
		}

		Session::flash('message', $message);

		return redirect()->route("category.index");
	}

}
