<?php
#Controller untuk entitas pemain

namespace App\Http\Controllers;

use App\Models\club;
use App\Models\pemain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    #Method untuk mengoutputkan topscorer pada halaman topscorer
    public function readTopScore()
    {
        $pemain = pemain::all();
        $pemain = $pemain->sortByDesc('gol');
        return view('pages.topscore-page', ['pemain' => $pemain]);
    }

    #Method untuk mengoutputkan topassist pada halaman topassist
    public function readTopAssist()
    {
        $pemain = pemain::all();
        $pemain = $pemain->sortByDesc('assist');
        return view('pages.topassist-page', ['pemain' => $pemain]);
    }
    #Method untuk mengoutputkan seluruh data pemain pada menu CRUD player
    public function readDataPemain()
    {
        $pemain = DB::table('pemain')->join('club', 'pemain.id_club', '=', 'club.id_club')->get();
        return view('pages.crud-player-page', ['pemain' => $pemain]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    #Method untuk pindah ke view/menu create-player
    public function create()
    {
        return view('pages.create-player');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    #Method untuk input data pemain
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemain' => 'required',
            'no_punggung' => 'required',
            'nama_club' => 'required',
            'gol' => 'required',
            'assist' => 'required'
        ]);
        if (Pemain::where('nama_pemain', '=', $request->nama_pemain)->exists()) {
            return redirect('/createplayer')->with('message', 'Pemain sudah ada di dalam database');
        } else {
            if (Club::where('nama_club', '=', $request->nama_club)->exists()) {
                $pemain = new pemain;
                $club = DB::table('club')->where('nama_club', $request->nama_club)->first();
                $pemain->id_club = $club->id_club;
                $pemain->nama_pemain = $request->nama_pemain;
                $pemain->no_punggung = $request->no_punggung;
                $pemain->gol = $request->gol;
                $pemain->assist = $request->assist;
                $pemain->save();
                return redirect('/crud-player-page')->with('message', 'Data pemain berhasil diinputkan');
            } else {
                return redirect('/createplayer')->with('message', 'Nama club tidak ada di dalam database');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pemain  $pemain
     * @return \Illuminate\Http\Response
     */
    public function show(pemain $pemain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pemain  $pemain
     * @return \Illuminate\Http\Response
     */
    public function edit(pemain $pemain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pemain  $pemain
     * @return \Illuminate\Http\Response
     */
    public function editPlayer(Request $request)
    {
        $request->validate([
            'nama_pemain' => 'required',
            'no_punggung' => 'required',
            'nama_club' => 'required',
            'gol' => 'required',
            'assist' => 'required'
        ]);
        if (Club::where('nama_club', '=', $request->nama_club)->exists()) {
            $data = pemain::find($request->id_pemain);
            $club = DB::table('club')->where('nama_club', $request->nama_club)->first();
            $data->id_club = $club->id_club;
            $data->nama_pemain = $request->nama_pemain;
            $data->no_punggung = $request->no_punggung;
            $data->gol = $request->gol;
            $data->assist = $request->assist;
            $data->save();
            return redirect('/crud-player-page')->with('message', 'Data pemain berhasil diupdate');
        } else {
            return back()->with('message', 'Nama club tidak ada di dalam database');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pemain  $pemain
     * @return \Illuminate\Http\Response
     */
    public function destroy(pemain $pemain)
    {
        //
    }

    public function delete($id_pemain)
    {
        $data = pemain::find($id_pemain);
        $data->delete();
        return redirect('/crud-player-page')->with('status', 'Pemain berhasil dihapus!');
    }

    public function showEditData($id_pemain)
    {
        $data = DB::table('pemain')->where('id_pemain', '=', $id_pemain)->join('club', 'pemain.id_club', '=', 'club.id_club')->get();
        return view('pages.edit-player-pages', ['data' => $data]);
    }
}
