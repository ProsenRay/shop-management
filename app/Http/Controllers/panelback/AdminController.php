<?php

namespace App\Http\Controllers\panelback;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){

        $data['title'] = 'Admin Dashboard';
        return view('backend.admin.index',$data);
    }
}
