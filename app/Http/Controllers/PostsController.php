<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PostsController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        return view('posts.index',compact('user'));
    }
}
