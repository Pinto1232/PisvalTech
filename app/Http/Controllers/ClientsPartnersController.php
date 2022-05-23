<?php

namespace App\Http\Controllers;

use App\clients_partners;
use Illuminate\Http\Request;

class ClientsPartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.client');
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
     * @param  \App\clients_partners  $clients_partners
     * @return \Illuminate\Http\Response
     */
    public function show(clients_partners $clients_partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clients_partners  $clients_partners
     * @return \Illuminate\Http\Response
     */
    public function edit(clients_partners $clients_partners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clients_partners  $clients_partners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clients_partners $clients_partners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clients_partners  $clients_partners
     * @return \Illuminate\Http\Response
     */
    public function destroy(clients_partners $clients_partners)
    {
        //
    }
}
