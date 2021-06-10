<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\RentedModel;
class RentedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function destroy($id){
        RentedModel::where('car_id', $id)->delete();
        return redirect('/admin/manageRents');
    }
    public function index()
    {

        $rented = RentedModel::all();
        return view('manageRents', [
            'Rented' => $rented
        ]);
    }
    public function ProfileIndex($id)
    {

        $rented = RentedModel::where('user_id','=', $id)->where('approval', '=',1)->get();
        return view('/profile', [
            'Rented' => $rented
        ]);
    }


    public function store()
    {
        $rent = new RentedModel();
        $rent->user_id = request('user_id');
        $rent->car_id = request('car_id');
        $rent->DateOfRent = request('DateOfRent');
        $rent->DateOfReturn = request('DateOfReturn');
        $rent->KM = request('KM');
        $rent->Price = request('Price');


        $rent->save();


        return redirect('/cars')->with('msg', "car selected for approval, head over to your dashboard to be informed");
    }

    public function edit($id)
    {
        $car = Car::firstOrFail()->where('id', $id);
        $car->update([
            'rented' => 1
        ]);


        $rented = RentedModel::firstOrFail()->where('car_id', $id);
        $rented->update([
            'approval' => 1,
        ]);

       
        return redirect('/admin/manageRents');
    }


}
