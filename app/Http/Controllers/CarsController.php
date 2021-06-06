<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    //
public function __construct()
{
    $this->middleware('auth');
}

    public function index()
    {

        
  //      $cars = Car::orderBy('id')->get();
        $cars = Car::where('rented', 0)->get();
        

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


      $car->save();


        return redirect('/cars/createCars')->with('msg',"car created");
    }
}
