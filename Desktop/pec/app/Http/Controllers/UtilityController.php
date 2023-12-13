<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\GlobalOption;
use Auth;
use Illuminate\Http\Request;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use App\Models\Client as ClientMDL;
use App\Models\User;
use App\Models\Country;
use App\Models\Project;
use App\Models\ClientOTP;
use Twilio\Rest\Client;
use App\Models\ConsultantService;
use App\Models\ConsultantSpecialization;
use App\Models\ConsultantDetail;
use DateTime;
use Session;
use DateInterval;
use DB;

class UtilityController extends Controller
{
    public function available_seats(Request $request)
    {
       $booking_date = $request->input('booking_date');
        $timeslot = $request->input('timeslot');
        $booked_seats = Booking::where('booking_date',$booking_date)->where('timeslot',$timeslot)->where('status', 'reserved')->sum('seats');
        $remaining_seats = 25 - $booked_seats; //todo: make total seats dynamic
        return response()->json($remaining_seats);
    }

    public function seat_price()
    {
         $price = GlobalOption::get()->first()->seat_price;
         return response()->json($price);
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
    public function getredirection()
    {
        
        if (str_contains(Auth::user()->menuroles, "admin")) {
            return redirect('/dashboard');
        }elseif (str_contains(Auth::user()->menuroles, "client")) {
            return redirect('/client_dashboard');
        }elseif (str_contains(Auth::user()->menuroles, "consultant")) {
            return redirect('/consultant_dashboard');
        }
    }
    
}
