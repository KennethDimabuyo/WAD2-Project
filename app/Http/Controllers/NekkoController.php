<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;

class NekkoController extends Controller
{
    public function create()
    {
    	return view ('Nekko/sell');
    }

}
