<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class managementController extends Controller
{
	
    public function management_dashboard()
    {
        return view('layouts.management.management_dashboard');
    }
 

	
}