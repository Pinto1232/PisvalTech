<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('front.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'mobile_number' => 'required',
            'project_name' => 'required',
            'project_objective' => 'required',
            'assinatura_confirmed' => ''
        ]);
        $contact = new Contact([
            'name'  => $request->get('name'),
            'email'  => $request->get('email'),
            'mobile_number'  => $request->get('mobile_number'),
            'project_name'  => $request->get('project_name'),
            'project_objective'  => $request->get('project_objective'),
            'assinatura_confirmed'  => $request->get('assinatura_confirmed')
        ]);
        $contact->save();
        return redirect()->route('index.create')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
