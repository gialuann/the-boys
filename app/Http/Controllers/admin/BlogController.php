<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('admin.blog');
    }
}
