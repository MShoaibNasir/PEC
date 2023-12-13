<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pec_register_consultant extends Model
{
    use HasFactory;
    public $table = 'pec_register_consultant';
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'email');
    }
}

