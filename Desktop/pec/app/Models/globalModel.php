<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class globalModel extends Model
{
    //use HasFactory;
    protected $guarded = [];
    protected $fillable = ['total_seats','seat_price'];
    // public $table='global_options';
}
