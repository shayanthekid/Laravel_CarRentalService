<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverModel extends Model
{
    use HasFactory;

    protected $table = 'driver';

    protected $primaryKey ='id';

    public function car(){
        return $this->belongsTo(Car::class);
    }

    public $timestamps = false;
    protected $guarded = [];
}
