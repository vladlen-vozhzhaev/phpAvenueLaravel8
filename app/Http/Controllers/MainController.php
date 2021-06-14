<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    function mainPage(){
        $posts = DB::table('blogs')->paginate();
        return view('main',['posts'=>$posts]);
    }
    function about(){
        return view('about');
    }
}
