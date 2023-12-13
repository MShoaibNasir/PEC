<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\TimeSlot;
use App\Models\GlobalOption;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;
use App\Exports\UserExport;
use App\Exports\BookingExports;
use Maatwebsite\Excel\Facades\Excel;


class ReportController extends Controller
{
    public function customer()
    {
       $user=user::all();

        return view('Reports.customerReports', compact('user'));
    }
    public function getCustomer(Request $req)
     {

        $user= user::whereBetween('created_at',[$req->date_from.' 00:00:00',$req->date_to.' 23:59:59'])->get();
         return view('Reports.customerReports',compact('user'));
    }
    public function booking()
    {

       $booking= db::select(db::raw("SELECT bookings.*, c.fname,c.lname FROM `bookings`
       join users as c on bookings.customer_id= c.id"));
        return view('Reports.bookingReport', compact('booking'));
    }
    public function getBooking(Request $req)
    {

       $booking = db::select(db::raw("SELECT bookings.*, c.fname,c.lname FROM `bookings`
       join users as c on bookings.customer_id= c.id
       where bookings.booking_date between  '$req->date_from' and '$req->date_to' "));

        return view('Reports.bookingReport',compact('booking'));
    }
//     public function excel()
//     {
//         return excel::download(new BookingExports,'booking.xls');
//     }
//     public function export()
//    {
//          return excel::download(new UserExport,'users.xls');
//     }
public function sales()
{
   $sales= db::select(db::raw("select c.fname,c.lname,c.email ,c.contact_number, booking_date,seats,total_amount
    from bookings join users as c on bookings.customer_id= c.id"));

    return view('Reports.salesReport', compact('sales'));
}
public function getSales(Request $req)
 {

     $sales = db::select(db::raw("select c.fname,c.lname,c.email ,c.contact_number, booking_date,seats,total_amount
    from bookings join users as c on bookings.customer_id= c.id
     where bookings.booking_date between  '$req->date_from' and '$req->date_to' "));
     return view('Reports.salesReport',compact('sales'));
}
public function global()
{
    $gl= db::select(db::raw("SELECT total_seats, seat_price FROM `global_options` where id = 1"));
    return view('Reports.globalOption', compact('gl'));
}
public function globalUpdate(Request $request)
{
$rules =[
    'total_seats' => 'required',
    'seat_price'=>'required'
 ];

 $this->validate($request, $rules);
 $gl = GlobalOption::where('id', '=', 1);
 $gl->update($request->except('_token'));
 $request->session()->flash('message', 'Successfully updated Global Options');
 $request->session()->flash('back', 'Reports.globalOption');
 return view('dashboard.shared.universal-info');
}

}
