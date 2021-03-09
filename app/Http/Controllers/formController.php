<?php

namespace App\Http\Controllers;


use App\form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class formController extends Controller
{
    public function validator() {

    	return request()->validate(

    		[
    		'name' => 'required',

			 'email' => 'required|unique:forms',

			 'location' =>'required',

			 'dept' => 'required',
			]
		);

    } 

    public function store(Request $req) {

        $form = form::create($this->validator());

        $name = $req->name;

        $nameArr  = explode(' ', $name);

        $fname = $nameArr[0];

        $initials = substr($fname, 0, 2);
        $id = $initials.rand();

    	return view('form', compact(['id']));
        
        Session::flash('success', 'form has been submitted succesfully. Thank YOU');
    }
}
