<?php namespace Scinventario\Http\Requests;

use Scinventario\Http\Requests\Request;

class DeviceCreateRequest extends Request {

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
			'code' => "required", 
			'category_id' => array('required'),
			'brand' => "required",
			'model' => "required",
			'serial' => "required|unique:devices,serial",
			'color' => "required",
			'dimension' => "required",
			'state' => "required",
			'entry' => "required",
			'made' => "required",
			'location_id' => array('required'),
			'owner' => "required",
			
		];
	}

}
