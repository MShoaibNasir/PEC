<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalOption extends Model
{
    use HasFactory;
    protected $fillable = ['total_seats','seat_price'];
    /**
     * Get the user associated with the GlobalOption
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'customer_id');
    }
}
