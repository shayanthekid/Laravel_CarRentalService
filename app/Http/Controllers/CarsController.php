<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Http;
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

        $client = new \GuzzleHttp\Client();

        $response = Http::get('https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=apiit+srilanka+ON&destinations=savoy+srilanka+ON&key=AIzaSyD_v_tgvi2IuVrTAOT46XJB_TLRcX6lG00');
       $car= Car::findOrFail($id);

        return view('details', [
            'car' => $car,
            'response'=>$response
            ]);
    }
    public function create()
    {
        $cars = Car::where('rented', 0)->get();

        return view('createCars', [
            'Cars' => $cars
        ]);
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

    public function destroy($id){

        $car = Car::findOrFail($id);
        $car->delete();

        return redirect('/cars/createCars')->with('msg2', "car deleted");

    }

    // function getDistance($addressFrom, $addressTo, $unit = '')
    // {
    //     // Google API key
    //     $apiKey = 'AIzaSyD_v_tgvi2IuVrTAOT46XJB_TLRcX6lG00';

    //     // Change address format
    //     $formattedAddrFrom    = str_replace(' ', '+', $addressFrom);
    //     $formattedAddrTo     = str_replace(' ', '+', $addressTo);

    //     // Geocoding API request with start address
    //     $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . $formattedAddrFrom . '&sensor=false&key=' . $apiKey);
    //     $outputFrom = json_decode($geocodeFrom);
    //     if (!empty($outputFrom->error_message)) {
    //         return $outputFrom->error_message;
    //     }

    //     // Geocoding API request with end address
    //     $geocodeTo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . $formattedAddrTo . '&sensor=false&key=' . $apiKey);
    //     $outputTo = json_decode($geocodeTo);
    //     if (!empty($outputTo->error_message)) {
    //         return $outputTo->error_message;
    //     }

    //     // Get latitude and longitude from the geodata
    //     $latitudeFrom    = $outputFrom->results[0]->geometry->location->lat;
    //     $longitudeFrom    = $outputFrom->results[0]->geometry->location->lng;
    //     $latitudeTo        = $outputTo->results[0]->geometry->location->lat;
    //     $longitudeTo    = $outputTo->results[0]->geometry->location->lng;

    //     // Calculate distance between latitude and longitude
    //     $theta    = $longitudeFrom - $longitudeTo;
    //     $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
    //     $dist    = acos($dist);
    //     $dist    = rad2deg($dist);
    //     $miles    = $dist * 60 * 1.1515;

    //     // Convert unit and return distance
    //     $unit = strtoupper($unit);
    //     if ($unit == "K") {
    //         return round($miles * 1.609344, 2) . ' km';
    //     } elseif ($unit == "M") {
    //         return round($miles * 1609.344, 2) . ' meters';
    //     } else {
    //         return round($miles, 2) . ' miles';
    //     }
    // }
    
}
