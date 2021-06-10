<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DriverModel;
class Drivers extends Component
{
    public $driver, $name, $DOB, $Experience,$car_id, $drive_id;
    public $updateMode = false;

    public function render()
    {

        $this->driver = DriverModel::all();
        return view('livewire.drivers');

    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->DOB = '';
        $this->Experience = '';
        $this->car_id = '';
    }


    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'DOB' => 'required|date',
            'Experience' => 'required',
            'car_id' => 'required',
        ]);

        DriverModel::create($validatedDate);

        session()->flash('message', 'Driver Created Successfully.');

        $this->resetInputFields();
    }
    public function edit($id)
    {
        $this->updateMode = true;
        $driver = DriverModel::where('id', $id)->first();
        $this->drive_id = $id;
        $this->name = $driver->name;
        $this->DOB = $driver->driver;
        $this->Experience = $driver->Experience;
        $this->car_id = $driver->car_id;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }


    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'DOB' => 'required',
            'Experience' => 'required',
            'car_id' => 'required',
        ]);

        if ($this->drive_id) {
            $driver = DriverModel::find($this->drive_id);
            $driver->update([
                'name' => $this->name,
                'DOB' => $this->DOB,
                'Experience' => $this->Experience,
                'car_id' => $this->car_id,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if ($id) {
            DriverModel::where('id', $id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }

}
