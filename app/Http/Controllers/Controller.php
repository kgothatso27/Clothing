<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function insert(request $req)
    { 
    	$picture = $req->input('picture');
    	$name = $req->input('name');
    	$color = $req->input('color');
    	$price = $req->input('price');
    	$type = $req->input('type');

    	$data = array('picture'=>$picture,"name"=>$name,"color"=>$color,"price"=>$price,"type"=>$type);
    	
    	DB::table('clothes')->insert($data);

    	return view('Pages.insert');
    }
}
