<?php

namespace App\Http\Controllers;
use App\Vehicle;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    //
    public function index(){
        return view('admin.pages.vehiclefleet');
    }
}
