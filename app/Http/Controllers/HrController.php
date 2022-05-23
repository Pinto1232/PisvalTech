<?php

namespace App\Http\Controllers;

use App\Hr;
use Illuminate\Http\Request;

class HrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.human');
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
     * @param  \App\Hr  $hr
     * @return \Illuminate\Http\Response
     */
    public function show(Hr $hr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hr  $hr
     * @return \Illuminate\Http\Response
     */
    public function edit(Hr $hr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hr  $hr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hr $hr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hr  $hr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hr $hr)
    {
        //
    }
}
