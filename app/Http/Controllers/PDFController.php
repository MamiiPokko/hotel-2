<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Customer;
use PDF;

class PDFController extends Controller
{
    public function pdf($id)
    {
    	$customers = Customer::find($id);
    	$pdf = PDF::loadview('pdf',['Customers' => $customers]);
    	return @$pdf->stream();
    }
}
