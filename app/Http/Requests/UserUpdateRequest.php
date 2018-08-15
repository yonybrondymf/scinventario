<?php namespace Scinventario\Http\Requests;

use Scinventario\Http\Requests\Request;
use Illuminate\Routing\Route;

class UserUpdateRequest extends Request {

	private $route;

	public function __construct(Route $route)
	{
		$this->route = $route;
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{

		return [
			'name' => "required", 
			'email' => "required|unique:users,email,".$this->route->getParameter('user'),
			'password' => "required",
			'type' => array('required'),
		];
	}

}
