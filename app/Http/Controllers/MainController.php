<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use File;

use HeaderImages;

class MainController extends Controller
{
    public function index(){
    	return view('index', ['headerImages'=>HeaderImages::getRandom(5)]);
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
