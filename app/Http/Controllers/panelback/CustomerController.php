<?php

namespace App\Http\Controllers\panelback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('customer.dashboard');
    }
}
