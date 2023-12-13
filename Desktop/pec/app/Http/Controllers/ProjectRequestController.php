<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\ProjectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProjectRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("applyproject");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cover_letter' => 'required|string', // required and number field validation
            // 'project_id' =>'integer', // required and number field validation
            'project_id' =>'required',
            'proposal_description' => 'string',
            'technical_proposal' => 'string',   // required and email format validation
            'commercial_proposal' =>'string', // required and number field validation
            'bidding_amount' =>'string',
            'uplaod_technical_proposal' => 'file|max:5000|mimes:pdf',
             'financial_statement' => 'file|max:5000|mimes:pdf',
        ]); // create the validations
        // dd($validator);
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return back()->withInput()->withErrors($validator);
        } else {
            //validations are passed, save new user in database
            $project_request = new ProjectRequest;
            $project_request->consultant_id= Auth::user()->id;
            // $project_request->client_id= Auth::user()->id;
            $project_request->project_id= $request->project_id;
            $project_request->proposal_description = $request->proposal_description;
            $project_request->technical_proposal = $request->technical_proposal;
            $project_request->commercial_proposal= $request->commercial_proposal;
             $project_request->bidding_amount= $request->bidding_amount;
             $project_request->cover_letter= $request->cover_letter;
             if ($request->hasfile('uplaod_technical_proposal')) {
                $file = $request->file('uplaod_technical_proposal');
                $name = $file->getClientOriginalName();
                $path = "filename.ext";
                $filename  = time() . '.' . $name;
                $file->move(public_path('files/clients/'), $filename, $path);
                $project_request->uplaod_technical_proposal = $filename;
            }
             if ($request->hasfile('financial_statement')) {
                $file = $request->file('financial_statement');
                $name = $file->getClientOriginalName();
                $path = "filename.ext";
                $filename  = time() . '.' . $name;
                $file->move(public_path('files/clients/'), $filename, $path);
                $project_request->financial_statement = $filename;
            }
            $project_request->save();
            $request->session()->flash('message', "Successfully Applied to Project.");
            $request->session()->flash('back', 'projects.index');
            return view('dashboard.shared.universal-info');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectRequest  $project_request
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectRequest $project_request)
    {
        return view('dashboard.project_requests.show', compact('project_request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectRequest  $project_request
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectRequest $project_request)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectRequest  $project_request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectRequest $project_request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectRequest  $project_request
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectRequest $project_request)
    {
        //
    }
}
