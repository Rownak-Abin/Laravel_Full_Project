<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regController extends Controller
{
    public function index(){
    	return view('reg');
    }

    public function store(){
    	return view('login');
    }
}
