<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class PostController extends Controller
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
            'cover_letter' => 'required|mimes:pdf|max:25000',
            'summary' => 'max:1000',   // required and email format validation
            'client_name' =>'string', // required and number field validation
            'proposal_description' => 'string',
            'technical_proposal' => 'string',   // required and email format validation
            'commercial_proposal' =>'string', // required and number field validation
      
      
            

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {

            return back()->withInput()->withErrors($validator);
            // validation failed redirect back to form

        

        } else {
            //validations are passed, save new user in database
            $Post = new Post;
            if ($request->hasfile('cover_letter')) {
                $file = $request->file('cover_letter');
                $extension = $file->getClientOriginalExtension();
                $filename  = time() . '.' . $extension;
                $file->move(('files/clients/'), $filename);
                $Post->cover_letter = $filename;
            }
            // $Post->cover_letter = $request->cover_letter;
            $Post->summary = $request->summary;
            $Post->client_name= $request->client_name;
            $Post->proposal_description = $request->proposal_description;
            $Post->technical_proposal = $request->technical_proposal;
            $Post->commercial_proposal= $request->commercial_proposal;
              
            $Post->save();
  
            // return redirect("dashboard")->with('success', 'You have successfully registered, Login to access your dashboard');
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
}
