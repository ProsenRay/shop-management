<?php

namespace App\Http\Controllers\panelback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        $data['title'] = 'Staff Dashboard';
        return view('backend.staff.index', $data);
    }
}
