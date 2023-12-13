<?php

namespace App\Http\Controllers\api;

use App\Models\TimeSlot;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimeSlotApiController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $timeslots = TimeSlot::all();
        return $this->success([
            $timeslots
        ]);
    }
}
