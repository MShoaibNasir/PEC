<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientOTP extends Model
{
    use HasFactory;
    protected $table = "client_otp";
    protected $guarded = [];
    protected $primaryKey = 'otp_id	';
    public $timestamps = false;

    
}
