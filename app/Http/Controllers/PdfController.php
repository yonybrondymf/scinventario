<?php namespace Scinventario\Http\Controllers;

use Scinventario\Http\Requests;
use Scinventario\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Scinventario\Device;

class PdfController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function invoice() 
    {
    	
    	//dd($data);
    	//$devices = $this->getData();
        //$date = date('Y-m-d');
        //$invoice = "2222";
        //$view =  \View::make('pdf.invoice', compact('devices', 'date', 'invoice'))->render();
        //$view =  view('pdf.invoice2', compact('devices'))->render();

    	/*$view =  view('pdf.invoice2')->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4', 'landscape');
        return $pdf->stream('invoice');

        //return view('pdf.invoice', compact('data','date','invoice'));*/
        //$data = $this->getData();
        ob_start();
        $date = date('Y-m-d');
        $invoice = "2222"; 
        $view =  view('pdf.invoice', compact('date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper'); 
        $pdf->loadHTML($view)->setPaper('a4', 'landscape')->setWarnings(false); 
        return $pdf->download('quotation.pdf');

    }

    public function getData() 
    {
    	$data= Device::all();

        return $data;
    }

}
