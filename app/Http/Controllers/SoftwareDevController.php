<?php

namespace App\Http\Controllers;

use App\Software_dev;
use Illuminate\Http\Request;

class SoftwareDevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.software');
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
     * @param  \App\Software_dev  $software_dev
     * @return \Illuminate\Http\Response
     */
    public function show(Software_dev $software_dev)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Software_dev  $software_dev
     * @return \Illuminate\Http\Response
     */
    public function edit(Software_dev $software_dev)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Software_dev  $software_dev
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Software_dev $software_dev)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Software_dev  $software_dev
     * @return \Illuminate\Http\Response
     */
    public function destroy(Software_dev $software_dev)
    {
        //
    }
}