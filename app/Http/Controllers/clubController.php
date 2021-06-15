<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\club;
use App\Models\pemain;
use Illuminate\Support\Facades\DB;
use Session;

class clubController extends Controller
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
        return view('pages.create-club-page');
    }
    #Method untuk menampilkan data club ke halaman crud club
    public function readDataClub()
    {
        $club = DB::table('club')->get();
        return view('pages.crud-club-page', ['club' => $club]);
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
        $request->validate([
            'nama_club' => 'required',
            'akronim' => 'required'
        ]);
        if (Club::where('nama_club', '=', $request->nama_club)->exists()) {
            return redirect('/createclub')->with('message', 'Club sudah ada di database');
        } else {
            $club = new club;
            $club->nama_club = $request->nama_club;
            $club->akronim = $request->akronim;
            $club->save();

            return redirect('/crud-club-page')->with('message', 'Club berhasil diinputkan');
        }
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
        $users = club::where('id_club', $id)->get();
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

    public function editClub(Request $request)
    {
        $request->validate([
            'nama_club' => 'required',
            'akronim' => 'required'
        ]);

        $data = club::find($request->id_club);
        $data->nama_club = $request->nama_club;
        $data->akronim = $request->akronim;
        $data->save();
        return redirect('/crud-club-page')->with('message', 'Data club berhasil diupdate');
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
    public function destroy($id_club)
    {
        $data = club::find($id_club);
        $data->delete();
        return redirect('/crud-club-page')->with('message', 'club berhasil dihapus!');
    }

    public function showEditDataClub($id_club)
    {
        $data = DB::table('club')->where('id_club', '=', $id_club)->get();
        return view('pages.edit-club-pages', ['data' => $data]);
    }



}
