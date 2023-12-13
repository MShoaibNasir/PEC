<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\TimeSlot;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BookingUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::where('customer_id', auth()->user()->id)->get();
        return view('website.bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $timeSlot = DB::table("time_slots")->pluck("time_start","time_end","id");
		// return view('dropdown',compact('countries'));
              $users= User::all();
              $timeSlot= TimeSlot::all();

              return view('dashboard.admin.addBooking',compact('users','timeSlot'));

        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules =[
            'booking_date' => ['required'],
            'timeslot' => ['required'],
            'seats'=>['required'],
        ];
        $this->validate($request, $rules);

        $booked_seats = Booking::where('booking_date', $request->input('booking_date'))->where('timeslot', $request->input('timeslot'))->where('status', 'reserved')->sum('seats');
        if (($booked_seats + $request->input('seats')) > 25) {
            $remaining_seats = 25 - $booked_seats;
                $errors = ["errors" => [
                    "booking" => ["Oops! booking failed, only ".$remaining_seats." are available."]
                ]];
                return response()->json($errors, 404);
        }

        $booking = Booking::create([
            'customer_id' => auth()->user()->id,
            'booking_date' => $request->input('booking_date'),
            'timeslot' => $request->input('timeslot'),
            'seats' => $request->input('seats'),
            'payment_status' => 'Pending',
        ]);

        $request->session()->flash('message', 'Booking created successfully, Please download ticket below.');
        return redirect()->route('userbookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users= user::all();
       $booking = Booking::where('id', '=', $id)->first();
        return view('dashboard.bookings.show', compact('booking','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users= User::all();
        $timeSlot= TimeSlot::all();
        $booking = Booking::where('id', '=', $id)->first();
        return view('dashboard.bookings.edit', compact('booking', 'users', 'timeSlot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules =[
            'customer_id' => ['required'],
            'booking_date' => ['required'],
            'timeslot' => ['required'],
            'seats' => ['required'],
            // 'status' => ['required'],
            'payment_status' => ['required'],
         ];
         $this->validate($request, $rules);

         $booking = Booking::where('id', '=', $id)->first();
         $booking->update($request->all());

         $request->session()->flash('message', 'Successfully updated Booking');
         $request->session()->flash('back', 'bookings.index');
         return view('dashboard.shared.universal-info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
            $booking = Booking::where('id', '=', $id)->first();
            $booking->delete();
            $request->session()->flash('message', "Successfully deleted Booking");
            $request->session()->flash('back', 'bookings.index');
            return view('dashboard.shared.universal-info');
    }

    public function single_record_pdf($id)
    {
        $booking = db::select(db::raw("select bookings.id as id, c.fname as customer1,c.lname as customer2,c.contact_number as contact,
        booking_date,seats,status,payment_status,timeslot
       from bookings join users as c on bookings.customer_id= c.id  where bookings.id =  $id"));
        /*Total amount */
        $total_amount = db::select(db::raw("select total_amount from bookings where id = $id"));
        $amount = "";
        foreach ($total_amount as $t_amount) {
            $amount .= "$t_amount->total_amount";
        }
        $d['amount'] = $amount;
        // dd($amount);
        $data = [
            'title' => 'Bookings Record',
            'date' => date('m/d/Y')
        ];
        return view('dashboard.bookings.single_record_pdf', $d, compact('booking'));
    }

 }
