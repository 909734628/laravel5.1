<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function session1(Request $request){
        session()->put('key','value1');
    }
    public function session2(Request $request){
        echo session()->get('key');
    }
}
