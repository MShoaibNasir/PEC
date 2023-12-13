<?php

namespace App\Http\Controllers;

use App\Models\TimeSlot;
use Illuminate\Http\Request;

class TimeSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timeslots = TimeSlot::all();
        return view('dashboard.timeslots.index', compact('timeslots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.timeslots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'time_start' => ['required'],
            'time_end' => ['required'],
        ];
        $this->validate($request, $rules);
        TimeSlot::create($request->all());
        $request->session()->flash('message', 'Successfully created TimeSlot');
        return redirect()->route('timeslots.index');
    }

    /**
     * Show the form
     * for editing the specified resource.
     *
     * @param  \App\Models\TimeSlot  $timeSlot
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $timeslot = TimeSlot::where('id', '=', $id)->first();
        return view('dashboard.timeslots.edit', compact('timeslot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimeSlot  $timeSlot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules =[
           'time_start' => ['required'],
            'time_end' => ['required'],
        ];
        $this->validate($request, $rules);

        $timeslot = TimeSlot::where('id', '=', $id)->first();
        $timeslot->update($request->all());

        $request->session()->flash('message', 'Successfully updated Timeslot');
        $request->session()->flash('back', 'timeslots.index');
        return view('dashboard.shared.universal-info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimeSlot  $timeSlot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
            $timeslot = TimeSlot::where('id', '=', $id)->first();
            $timeslot->delete();
            $request->session()->flash('message', "Successfully deleted Timeslot");
            $request->session()->flash('back', 'timeslots.index');
            return view('dashboard.shared.universal-info');
    }
}
