<?php

namespace App\Http\Controllers;

class PrincipalController extends Controller
{
    public function principal()
    {
        return view('site.principal',['title'=>'Home']);
    }
}
