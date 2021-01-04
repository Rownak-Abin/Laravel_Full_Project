<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookingController extends Controller
{
    public function index(Request $req){
    	$bookings = DB::table('user')->select('id','Cname','tour','status')->get();

    	return view('bookings')->with('bookings', $bookings);
    }

    public function add($id){
    	$uid = $id;

    	$user = DB::table('user')->select('id','Cname','tour','status')
    							 ->where('id',$uid)
    							 ->get();
    	return view('confirmBooking')->with('user', $user);
    }

    public function approve($id){
    	$uid = $id;

    	$status = DB::table('user')->select('status')
    							   ->where('id',$uid)
    							   ->get();

        // echo $status;
        if($status=="Pending"){
        	$insert = DB::table('user')
        				->where('id',$uid)
    					->update(['status'=>'Confirmed']);
        }

        return redirect('bookings');

    }
}
