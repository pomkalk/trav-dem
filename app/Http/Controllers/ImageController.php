<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Services\HeaderImage\HeaderImage;
use App\UploadedImage as UploadedImageModel;
use Storage;

class ImageController extends Controller
{
    public function getHeaderImage($id){
    	return (new HeaderImage())->getImageById($id);
    }

    public function getImage($id){
    	$image = UploadedImageModel::findOrFail($id);
    	return response(Storage::get('uploaded_images/'.$image->id.'.'.$image->extension), 200)->header('Content-Type', $image->mime);
    }

}
