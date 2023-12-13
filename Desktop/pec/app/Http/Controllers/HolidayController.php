<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holidays = Holiday::all();
        return view('dashboard.holidays.index', compact('holidays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.holidays.create');
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
            'date' => ['required'],
            'title' => ['required'],
        ];
        $this->validate($request, $rules);
        Holiday::create($request->all());
        $request->session()->flash('message', 'Successfully created Holiday');
        return redirect()->route('holidays.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $holiday = Holiday::where('id', '=', $id)->first();
        return view('dashboard.holidays.edit', compact('holiday'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules =[
            'date' => ['required'],
            'title' => ['required'],
        ];
        $this->validate($request, $rules);

        $holiday = Holiday::where('id', '=', $id)->first();
        $holiday->update($request->all());

        $request->session()->flash('message', 'Successfully updated Holiday');
        $request->session()->flash('back', 'holidays.index');
        return view('dashboard.shared.universal-info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $holiday = Holiday::where('id', '=', $id)->first();
            $holiday->delete();
            $request->session()->flash('message', "Successfully deleted Holiday");
            $request->session()->flash('back', 'holidays.index');
            return view('dashboard.shared.universal-info');
    }
}
