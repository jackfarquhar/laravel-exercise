<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
	
	public function home() {
		
		
          return view('home');
		
	}
  
  
}