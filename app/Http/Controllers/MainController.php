<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use File;

use App\Services\HeaderImage\HeaderImage;

class MainController extends Controller
{
    public function index(){

    	$a = new \App\Services\HeaderImage\HeaderImage();
    	$a->getRandom();
    	return view('index');
    }

    public function getUpload(){
    	$a = new HeaderImage();
    	dd($a->getRandom(2));
    }

    public function postUpload(Request $request){
    	$a = new HeaderImage();
    	$a->upload($request, 'upload');

    	
    }    
}
