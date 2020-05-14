<?php

namespace App\Http\Controllers;

use App\Smfanak;
use Illuminate\Http\Request;

class SmfanakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('smfanak.smfanak');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Smfanak  $smfanak
     * @return \Illuminate\Http\Response
     */
    public function show(Smfanak $smfanak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Smfanak  $smfanak
     * @return \Illuminate\Http\Response
     */
    public function edit(Smfanak $smfanak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Smfanak  $smfanak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Smfanak $smfanak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Smfanak  $smfanak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Smfanak $smfanak)
    {
        //
    }
}
