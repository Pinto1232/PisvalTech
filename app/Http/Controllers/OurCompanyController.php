<?php

namespace App\Http\Controllers;

use App\Our_Company;
use Illuminate\Http\Request;

class OurCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('front.our-company');
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
     * @param  \App\Our_Company  $our_Company
     * @return \Illuminate\Http\Response
     */
    public function show(Our_Company $our_Company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Our_Company  $our_Company
     * @return \Illuminate\Http\Response
     */
    public function edit(Our_Company $our_Company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Our_Company  $our_Company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Our_Company $our_Company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Our_Company  $our_Company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Our_Company $our_Company)
    {
        //
    }
}
