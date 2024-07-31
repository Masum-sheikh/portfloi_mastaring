<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function mydeshbord(){
        return view('dashbord');
    }
}
