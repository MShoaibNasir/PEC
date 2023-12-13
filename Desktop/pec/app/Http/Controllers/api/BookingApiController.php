<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponser;
use App\Models\Booking;
use Illuminate\Http\Request;
use DB;
class BookingApiController extends Controller
{
    use ApiResponser;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::where('customer_id',auth()->user()->id)->get();
        return $this->success([
            $bookings
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attr = $request->validate([
            'booking_date' => 'required|date',
            'timeslot' => 'required|string',
            'seats' => 'required|integer',
        ]);

        $booked_seats = Booking::where('booking_date', $attr['booking_date'])->where('timeslot', $attr['timeslot'])->where('status', 'reserved')->sum('seats');
        if (($booked_seats + $attr['seats']) > 25) {
            return $this->error('Oops! Booking Failed :(', 400, ['available_seats' => 25 - $booked_seats]);
        }
        $booking = Booking::create(array_merge($request->all(), ['customer_id' => auth()->user()->id]));
        return $this->success($booking);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::where('id',$id)->where('customer_id', auth()->user()->id)->first();
        return $this->success($booking);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::where('id',$id)->first();
        $booking->status = 'cancelled';
        $result = $booking->save();
        if ($result) {
            return $this->success($result, 'Cancelled!');
        }else{
            return $this->error($result, 'Oops something went wrong :(');
        }
    }

    /**
     * Check remaining seats for a timeslot.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function available_seats(Request $request)
    {
        $booking_date = $request->input('booking_date');
        $timeslot = $request->input('timeslot');
        $booked_seats = Booking::where('booking_date',$booking_date)->where('timeslot',$timeslot)->where('status', 'reserved')->sum('seats');
        $remaining_seats = 25 - $booked_seats; //todo: make total seats dynamic
        return $this->success($remaining_seats);
    }
}
