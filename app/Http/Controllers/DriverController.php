<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriverModel;
class DriverController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {


        //      $cars = Car::orderBy('id')->get();
        $driver = DriverModel::orderBy('id')->get();

        return view('createDrivers', [
            'Drivers' => $driver,
            'name' => request('name')
        ]);
    }

}
