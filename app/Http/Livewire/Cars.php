<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;
class Cars extends Component
{

    public $car, $brand, $name, $details, $IMGString, $carid;
    public $updateMode = false;

    public function render()
    {
        $this->car = Car::all();
        return view('livewire.cars');
    }

    private function resetInputFields()
    {
        $this->brand = '';
        $this->name = '';
        $this->details = '';
        $this->IMGString = '';
     
    }


    public function store()
    {
        $validatedDate = $this->validate([
            'brand' => 'required',
            'name' => 'required|date',
            'details' => 'required',
            'IMGString' => 'required',
           
        ]);

        Car::create($validatedDate);

        session()->flash('message', 'Car Created Successfully.');

        $this->resetInputFields();
    }


    public function edit($id)
    {
        $this->updateMode = true;
        $car = Car::where('id', $id)->first();
        $this->carid = $id;
        $this->brand = $car->brand;
        $this->name = $car->name;
        $this->details = $car->details;
        $this->IMGString = $car->IMGString;
    }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
    public function update()
    {
        $validatedDate = $this->validate([
            'brand' => 'required',
            'name' => 'required|date',
            'details' => 'required',
            'IMGString' => 'required',

        ]);


        if ($this->carid) {
            $car = Car::find($this->carid);
            $car->update([
                'brand' => $this->brand,
                'name' => $this->name,
                'details' => $this->details,
                'IMGString' => $this->IMGString,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($carid)
    {
        if ($carid) {
            Car::where('id', $carid)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }


}
