<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "projects";
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = [];
   
    
      public function clientdetails()
    {
        return $this->hasMany(Client::class,'user_id','user_id');
    }
}
