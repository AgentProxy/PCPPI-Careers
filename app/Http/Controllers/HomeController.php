<?php

namespace App\Http\Controllers;
use App\Position;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function careers(){
        $luzon_positions = Position::all();
        $luzon_positions = DB::table('positions')
                            ->where('place_id', '=', '1')
                            ->get();

        $visayas_positions = DB::table('positions')
                            ->where('place_id', '=', '2')
                            ->get();
        $mindanao_positions = DB::table('positions')
                            ->where('place_id', '=', '3')
                            ->get();

        return view('careers.index',compact('luzon_positions','visayas_positions','mindanao_positions'));
    }


    public function history(){
        return view('history.index');
    }
}

