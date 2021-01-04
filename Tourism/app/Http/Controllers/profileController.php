<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Agency;

class profileController extends Controller
{
    public function index(Request $req){
    	$sess = $req->session()->get('username');
    	$user = Agency::all()->where('name',$sess) ;
    	// $user = $users->find()
    	return view('profile')->with('user', $user);
    }

    public function edit($id){

    	$uid = $id;
    	$user = Agency::all()->where('agencyid',$uid) ;
    	return view('editProfile')->with('user', $user);
    }

    public function update(Request $req){

    	$username = $req->input('username'); 
    	$password = $req->input('password');
    	$agencyname = $req->input('agencyname');
    	$agencydesc = $req->input('agencydesc');
    	$licenseno = $req->input('licenseno');
    	$webadd = $req->input('webadd');
    	$contact = $req->input('contact');
    	$email = $req->input('email');

    	$users = DB::table('agencyinfo')
	    	->where('username', $username)
	    	->update([
			    'username' => $username,
			    'password' => $password,
			    'agencyname' => $agencyname,
			    'agencydesc' => $agencydesc,
			    'licenseno' => $licenseno,
			    'webadd' => $webadd,
			    'contact' => $contact,
			    'email' => $email,
			]);

    	return redirect('profile');
    }
}
