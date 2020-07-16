<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function array(){
       $a=array();
       $b=array();
       $c=array();
       $d=array();
       $e=array();
       array_push($c,'favor_id');
       array_push($b,$c);
       array_push($a,$b);
       array_push($e,'favor_media_id');
       array_push($d,$e);
       array_push($a,$d);
     foreach($a as $b){$cars = array (
        array(array('favour_id')));
         dd($b);
     }
    }
}
