<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentedModel extends Model
{
    use HasFactory;

    protected $table = 'rented';
    public $timestamps = false;


}
