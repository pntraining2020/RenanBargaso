<?php

namespace App\Http\Controllers;
use App\Models\Names;

use Illuminate\Http\Request;

class Clock extends Controller
{
    public function index(){
        $info = names::all();
        return view('welcome',['names'=>$info]);
    }

}
