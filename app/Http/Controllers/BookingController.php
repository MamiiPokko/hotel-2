<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BookingController extends Controller
{
    public function getrent()
    {
    	return view('page.rent');
    }
    public function getbooking()
    {
    	return view('page.booking');
    }
}
