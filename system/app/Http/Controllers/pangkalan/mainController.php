<?php

namespace App\Http\Controllers\pangkalan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mainController extends Controller
{
    function index(){
        return view('pangkalan.profile');
    }
}
