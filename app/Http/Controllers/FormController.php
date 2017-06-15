<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function application1(){
    	return view('forms.application');
    }

    public function application2(){
    	return view('forms.page2');
    }

    public function compensation(){
    	return view('forms.compensation');
    }
}
