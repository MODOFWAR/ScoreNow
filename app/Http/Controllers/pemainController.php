<?php

namespace App\Http\Controllers;

use App\Models\pemain;
use Illuminate\Http\Request;

class pemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function readTopScore()
    {
        $pemain = pemain::all();
        $pemain = $pemain->sortByDesc('goal');
        return view('pages.topscore-page', ['pemain' => $pemain]);
    }

    public function readTopAssist()
    {
        $pemain = pemain::all();
        $pemain = $pemain->sortByDesc('assist');
        return view('pages.topassist-page', ['pemain' => $pemain]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, pemain $pemain)
    {
        //
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
}