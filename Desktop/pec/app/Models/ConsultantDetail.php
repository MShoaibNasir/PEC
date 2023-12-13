<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ConsultantService;
use App\Models\ConsultantSpecialization;
class ConsultantDetail extends Model
{
    use HasFactory;
    protected $table = "excel_consultant_contact_details";
    public $timestamps = false;
    protected $primaryKey = 'Sr';
    protected $guarded = [];

    public function consultanservices()
    {
        return $this->hasMany(ConsultantService::class,'License_No','License_No');
    }
    public function consultanspecialization()
    {
        return $this->hasMany(ConsultantSpecialization::class,'License_No','License_No');
    }
}
