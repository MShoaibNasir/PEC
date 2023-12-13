<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('dashboard.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.videos.create');
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
            'title' => ['required'],
            'uploaded_video' => ['required', 'max:10240'],
        ];
        $messages = [
            'uploaded_video.max' => 'The video may not be greater than 10 megabytes'
        ];
        $this->validate($request, $rules, $messages);

        $videoModel = new Video;
        if($request->file()) {
                Video::where('status', 1)->update(['status' => 0]); //deactivate old video
                $fileName = time().'_'.$request->file('uploaded_video')->getClientOriginalName();
                $filePath = $request->file('uploaded_video')->store('uploads', 'public');

                $videoModel->title = $request->title;
                $videoModel->path = 'xtreme_laravel/public/public/' . $filePath;
                $videoModel->save();
        }
        $request->session()->flash('message', 'Successfully uploaded Video');
        return redirect()->route('videos.index');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
            $video = Video::where('id', '=', $id)->first();
            File::delete(public_path($video->path)); //delete file
            $video->delete();
            $request->session()->flash('message', "Successfully deleted Video");
            $request->session()->flash('back', 'videos.index');
            return view('dashboard.shared.universal-info');
    }

    /**
     * Change status of video.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function activate_video($id, Request $request)
    {
            Video::where('status', 1)->update(['status' => 0]); //deactivate old video
            $video = Video::where('id', '=', $id)->first();
            $video->status = 1;
            $video->save();
            $request->session()->flash('message', "Successfully Activated Video");
            $request->session()->flash('back', 'videos.index');
            return view('dashboard.shared.universal-info');
    }
}
