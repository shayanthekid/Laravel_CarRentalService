<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
class MapsDistance extends Component
{

    public $origin;
    public $destination;
    public $data;

    public function mount()
    {

        $this->origin = '';
        $this->destination = '';
        $this->data;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function Query(){
        
        $response= Http::get('https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=' . $this->origin . '+srilanka+ON&destinations=' . $this->destination . '+srilanka+ON&key=AIzaSyD_v_tgvi2IuVrTAOT46XJB_TLRcX6lG00');
        $this->data = $response->json();
        

    }





    public function render()
    {


        return view('livewire.maps-distance', ['response' => $this->data]);
    }
}
