<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class mysql extends Controller
{	
    public function __invoke($id=null)
    {	
    	if(is_null($id)){
    		$return=\DB::table('users')->get();
    	}else{
    		
    		$return=\DB::table('users')->where('id',$id)->get();

    	}
    	
    	return view('mysql',['return' => $return]);

    }
}
