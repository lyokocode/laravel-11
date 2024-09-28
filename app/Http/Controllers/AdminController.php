<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function post(){

        $posts = Auth::user()->posts()->latest()->paginate(8);

        return view('pages/Admin/posts', ['posts'=>$posts]);
    }

}
