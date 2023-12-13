<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantService extends Model
{
    use HasFactory;
    protected $table = "excel_consultant_service_codes";
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = [];
}
