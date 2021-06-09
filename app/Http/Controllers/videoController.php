<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;
use Illuminate\Support\Facades\DB;

class videoController extends Controller
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
    #Method untuk mengembalikan ke halaman create club
    public function create()
    {
        return view('pages.create-highlights-pages');
    }
    #Method untuk menampilkan data club ke halaman crud club
    public function readDataVideo()
    {
        $video = video::all();
        return view('pages.crud-highlights-pages', ['video_highlight' => $video]);
    }

    public function showDataVideo()
    {
        $video = video::all();
        return view('pages.highlight-page', ['video_highlight' => $video]);
    }

    public function showEditDataVideo($id_videos)
    {
        $data = DB::table('highlight_video')->where('id_video', '=', $id_videos)->get();
        return view('pages.edit-video-pages', ['data' => $data]);
    }

    public function editVideo(Request $request)
    {
        $data = video::find($request->id_video);
        $data->nama_video = $request->nama_video;
        $data->link_video = $request->link_video;
        $data->save();
        return redirect('/crud-highlights-page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    #Method untuk input data club lalu mengembalikan ke halaman crudclub
    public function store(Request $request)
    {
        video::create($request->all());
        return redirect('/crud-highlights-page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    #Method untuk menampilkan club berdasarkan id
    public function show($id)
    {
        $users = video::where('id_video', $id)->get();
        return $users;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
