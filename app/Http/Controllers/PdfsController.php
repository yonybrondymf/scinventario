<?php namespace Scinventario\Http\Controllers;

use Scinventario\Http\Requests;
use Scinventario\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Scinventario\Device;
use Scinventario\Location;


class PdfsController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function github($name=null , $category=null,$location=null)
	{
		if ($name==null) {
			$name="";
		}
		return $this->getData($name, $category,$location);   
	}
	public function github2($category)
	{
		$name="";
		$location="";
		return $this->getData($name, $category,$location);   
	}
	public function github3($category,$location)
	{
		$name="";
		return $this->getData($name, $category,$location);   
	}

	public function github4($location)
	{
		$name="";
		$category="";
		return $this->getData($name, $category,$location);   
	}

	public function github5($name,$location)
	{
		$category="";
		return $this->getData($name, $category,$location);   
	}
	public function github6($name)
	{
		$category="";
		$location="";
		return $this->getData($name, $category,$location);   
	}


	public static function getData($name, $category,$location)
	{
		$devices = Device::filters($name,$category,$location);
		$ubicacion ="General";
		$locationE = Location::where('id',$location)->first();
		if ($location!="") {
			$ubicacion = $locationE->name;
		}
		$date = date('Y');
        
        //$devices = $this->getData();
        $view =  view('pdf.invoice', compact('devices','date','ubicacion'))->render();
        /*$pdf = \App::make('dompdf.wrapper'); 
        $pdf->loadHTML($view)->setPaper('a4', 'landscape')->setWarnings(false); 
        return $pdf->download('quotation.pdf');*/
        $pdf = \App::make('snappy.pdf.wrapper');
	    $pdf->loadHTML($view)->setPaper('a4')->setOrientation('landscape');
	    return $pdf->stream();
	}

}
