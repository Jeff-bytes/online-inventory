<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangayController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
    	return view('admin.barangay.index');
    }
}
