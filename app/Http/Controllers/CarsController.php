<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    //

    public function index()
    {

        $cars = Car::all();
  //      $cars = Car::orderBy('id')->get();
  //      $cars = Car::where('type', 'Toyota')->get();
        

        return view('cars', [
            'Cars' => $cars,
            'name' => request('name')

        ]);
    }

    public function show($id)
    {

       $car= Car::findOrFail($id);

        return view('details', ['car' => $car]);
    }
    public function create()
    {


        return view('createCars');
    }
    public function store()
    {

      $car = new Car();
      $car->name = request('name');
      $car->brand = request('brand');
      $car->details = request('details');
      $car->IMGString = request('IMGString');
      $car->driver_id  = request('driver_id');

      $car->save();


        return redirect('/cars/createCars')->with('msg',"car created");
    }
}
