<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;

class dataController extends Controller
{
    public function dataabsensi(){
		$data = DB::table('data')->get();
		return view('get.dataAbsensi')->with('data',$data);	
	}

	public function announce(){
		$pengumuman = DB::table('pengumuman')->get();
		return view('get.pengumuman')->with('pengumuman', $pengumuman);		
	}

}
