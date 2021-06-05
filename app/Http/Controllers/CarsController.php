<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CarsController extends Controller
{
    //

    public function index(){
        $cars = [
            ['Type' => 'Sedan', 'Name' => 'Totoyta'],
            ['Type' => 'Suv', 'Name' => 'Vezel'],
            ['Type' => 'hach', 'Name' => 'Vesdfsdfzel']
        ];



        return view('cars', [
            'Cars' => $cars,
            'name' => request('name')

        ]);
    }

    public function show($id){


        return view('details', ['id' => $id]);
    }


}
