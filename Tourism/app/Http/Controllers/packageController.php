<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Agency;

class packageController extends Controller
{
    public function index(Request $req){
    	$packages = DB::table('tours')->select('id','tname','description','place')->get();

    	return view('packages')->with('packages', $packages);
    }

    public function details($id){
    	$pid = $id;
    	$details = DB::table('tours')
    				->join('tour_det','tours.id','=','tour_det.tid')
    				->select('tours.*','tour_det.titlepic','tour_det.mainpic','tour_det.map')
    				->where('tours.id',$pid)
    				->get();

    	return view('packageDetails')->with('details', $details);
    }

    public function add(Request $req){
    	return view('addPackage');
    }

    public function save(Request $req){

    	$tname       = $req->input('tname');
    	$place       = $req->input('place');
    	$description = $req->input('description');
    	$transport   = $req->input('transport');
    	$departure   = $req->input('departure');
    	$seller      = $req->input('seller');
    	$duration    = $req->input('duration');
    	$tprice      = $req->input('tprice');
    	$rating      = $req->input('rating');


    	$titlepic = '';
    	$mainpic     = '';
    	$map         = '';

    	if($req->hasFile('titlepic')){
    		$pic1  = $req->file('titlepic');
    		$extension1 = $pic1->getClientOriginalExtension();
    		$fileName1 = time().'.'.$extension1;
    		$pic1->move('imgs',$fileName1);
    		$titlepic = $fileName1;
    	}else{
    		return $req;
    	}

		if($req->hasFile('mainpic')){
    		$pic2  = $req->file('mainpic');
    		$extension2 = $pic2->getClientOriginalExtension();
    		$fileName2 = time().'.'.$extension2;
    		$pic2->move('imgs',$fileName2);
    		$mainpic = $fileName2;
    	}else{
    		return $req;
    	}

		if($req->hasFile('map')){
    		$pic3  = $req->file('map');
    		$extension3 = $pic3->getClientOriginalExtension();
    		$fileName3 = time().'.'.$extension3;
    		$pic3->move('imgs',$fileName3);
    		$map = $fileName3;
    	}else{
    		return $req;
    	}




    	$packages = DB::table('tours')
    				->insert([
    					'tname'       => $tname,
    					'place'       => $place,
    					'description' => $description,
    					'transport'   => $transport,
    					'departure'   => $departure,
    					'seller'      => $seller,
    					'duration'    => $duration,
    					'tprice'      => $tprice,
    					'rating'      => $rating
    				]
		);

    	if($packages){
    		$insert = DB::table('tour_det')
    					->insert([
    						'tname'   => $tname,
    						'titlepic'=> $titlepic,
    						'mainpic' => $mainpic,
    						'map'     => $map
    					]);
    	}

    	return redirect('packages');
    }


    public function delete($id){
    	$pid = $id;
    	$packages = DB::table('tours')
    				->select('id','tname','description','place')
    				->where('id',$pid)
    				->get();

    	return view('deletePackage')->with('packages', $packages);
    }

    public function destroy($id){
    	$pid = $id;
    	$tname = '';

    	$packages = DB::table('tours')
    				->where('id',$pid)
    				->delete();

    	if($packages){
    		$delete = DB::table('tour_det')
    				->where('tid',$pid)
    				->delete();
    	}

    	return redirect('packages');
    }

    public function modify($id){

    	$pid = $id;
    	$package = DB::table('tours')
    				->join('tour_det','tours.id','=','tour_det.tid')
    				->select('tours.*','tour_det.titlepic','tour_det.mainpic','tour_det.map')
    				->where('id',$pid) 
    				->get();
    	return view('modifyPackage')->with('package', $package);
    }

    public function update($id){

    	$pid = $id;

    	$tname       = $req->input('tname');
    	$place       = $req->input('place');
    	$description = $req->input('description');
    	$transport   = $req->input('transport');
    	$departure   = $req->input('departure');
    	$seller      = $req->input('seller');
    	$duration    = $req->input('duration');
    	$tprice      = $req->input('tprice');
    	$rating      = $req->input('rating');


    	$titlepic = '';
    	$mainpic     = '';
    	$map         = '';

    	if($req->hasFile('titlepic')){
    		$pic1  = $req->file('titlepic');
    		$extension1 = $pic1->getClientOriginalExtension();
    		$fileName1 = time().'.'.$extension1;
    		$pic1->move('imgs',$fileName1);
    		$titlepic = $fileName1;
    	}else{
    		return $req;
    	}

		if($req->hasFile('mainpic')){
    		$pic2  = $req->file('mainpic');
    		$extension2 = $pic2->getClientOriginalExtension();
    		$fileName2 = time().'.'.$extension2;
    		$pic2->move('imgs',$fileName2);
    		$mainpic = $fileName2;
    	}else{
    		return $req;
    	}

		if($req->hasFile('map')){
    		$pic3  = $req->file('map');
    		$extension3 = $pic3->getClientOriginalExtension();
    		$fileName3 = time().'.'.$extension3;
    		$pic3->move('imgs',$fileName3);
    		$map = $fileName3;
    	}else{
    		return $req;
    	}

    	$packages = DB::table('tours')
	    	->where('id', $pid)
	    	->update([
			    		'tname'       => $tname,
    					'place'       => $place,
    					'description' => $description,
    					'transport'   => $transport,
    					'departure'   => $departure,
    					'seller'      => $seller,
    					'duration'    => $duration,
    					'tprice'      => $tprice,
    					'rating'      => $rating
			]);

		if($packages){
    		$update = DB::table('tour_det')
    					->where('tid', $pid)
    					->update([
    						'tname'   => $tname,
    						'titlepic'=> $titlepic,
    						'mainpic' => $mainpic,
    						'map'     => $map
    					]);
    	}

    	return redirect('packages');

    }
}
