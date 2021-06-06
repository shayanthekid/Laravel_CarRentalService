<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;
class CarSearchBar extends Component
{

public $query;

public $cars;

public function mount(){
        $this->query = '';
        $this->cars = [];
   
}


public function resetFilters(){
        $this->reset();
}


public function updatedQuery(){


    $this->cars = Car::where('name','like','%' . $this->query . '%')
    ->get()->toArray();
}

    public function render()
    {
        return view('livewire.car-search-bar');
    }
}
