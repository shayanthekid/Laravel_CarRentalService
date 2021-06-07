<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;

class UploadPhoto extends Component
{

    use WithFileUploads;

    public $photo;

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $filename =  $this->photo->storeAs('public/photo', $this->photo->getClientOriginalName() );
        dd($filename->temporaryUrl());
    }


    public function render()
    {
        return view('livewire.upload-photo');
    }
}
