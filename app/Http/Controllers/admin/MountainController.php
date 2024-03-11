<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MountainController extends Controller
{
    public function showMountainSummit(){
        return view('admin.mountain.sevensummit');
    }
    public function showMountainPeak(){
        return view('admin.mountain.800mpeak');
    }

}
