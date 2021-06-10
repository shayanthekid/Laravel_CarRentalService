<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use App\Models\RentedModel;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}

    public function index()
    {


        //      $cars = Car::orderBy('id')->get();
      
        $user = auth()->user();
        $cars = Car::where('rented', 1)->get();
        $rented = RentedModel::all();
        return view('admin', [
            'user' => $user,
            'Cars' =>$cars,
            'Rented'=> $rented
        ]);
    }

    public function store()
    {
        

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->usertype = request('usertype');

        $user->save();


        return redirect('/admin')->with('msg', "User created");
    }

}
