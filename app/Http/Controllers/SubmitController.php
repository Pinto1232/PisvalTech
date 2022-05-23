<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;
use DB;

class SubmitController extends Controller
{
    public function index(){
        return view('front.submit');
    }

    public function save(Request $request){

           // Validate the form request
            $this->validate($request,[
                'nome'=> 'required',
                'email'=> 'required',
                'númeroTel'=> 'required',
                'nomeProjecto'=>'required',
                'objectivoProjecto'=> 'required',
            ]);

          //print_r($request->input());
          $contact = new ContactModel;
          $contact->nome = $request->nome;
          $contact->email = $request->email;
          $contact->númeroTel = $request->númeroTel;
          $contact->nomeProjecto = $request->nomeProjecto;
          $contact->objectivoProjecto = $request->objectivoProjecto;
          $contact->save();
          return view('front.submit');
    }
}
