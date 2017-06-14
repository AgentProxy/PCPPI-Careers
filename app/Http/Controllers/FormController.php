<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function application(){
    	return view('forms.application');
    }

    public function page2(){
    	return view('forms.page2');
    }
}
