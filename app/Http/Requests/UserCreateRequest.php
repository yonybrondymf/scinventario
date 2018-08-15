<?php namespace Scinventario\Http\Requests;

use Scinventario\Http\Requests\Request;

class UserCreateRequest extends Request {

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
			'email' => "required|unique:users,email",
			'password' => "required|min:6",
			'type' => "required|in:user,admin",
		];
	}

}
