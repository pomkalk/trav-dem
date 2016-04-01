<?php namespace App\Services\HeaderImage;

/*
 * Класс для получения случайной картинки из изображений 
 * предназначенных для header части сайта. Все изображения
 * имеют одинаковый размер 1280х480 и хранятся в Storage сайта
 *
 * Конфигурация в config.services.headerimage
 *  - path папка где хранятся изображения
 *
 * 
 * model HeaderImage
 * migration 2016_03_30_082008_create_header_images_table
 */

use App\HeaderImage as HeaderImageModel;
use Storage;
use Validator;
use File;

class HeaderImage{
	/**
	 * Возвращает случайные изображения для header
	 * @param  integer $amount - количество
	 * @return array of [
	 *                  'id'=>'',
	 *                 	'title'=>'',
	 *                 	'text'=>'',
	 * 					]
	 */
	public function getRandom($amount = 1){
		$path = config('services.headerimage.path');
		$files = Storage::files($path);
		shuffle($files);
		$result = [];
		for($i=0;$i<$amount;$i++){
			array_push($result, pathinfo($files[$i])['filename']);
		}
		return $result;
	}

	public function upload($request, $field){
		$validator = Validator::make($request->all(), [$field=>'image']);
		if ($validator->fails()){
			return (object)['success'=>false, 'messages'=>$validator->messages()];
		}

		$folder = config('services.headerimage.path');
		$file = $request->file($field);
		$file_info = getimagesize($file->getRealPath());
		$model = new HeaderImageModel();
		$id = str_random(60);
		$model->id = $id;
		$model->name = $file->getClientOriginalName();
		$model->extension = $file->getClientOriginalExtension();
		$model->mime = $file->getMimeType();
		$model->size = round($file->getSize()/1024/1024, 3);
		$model->width = $file_info[0];
		$model->height = $file_info[1];

		Storage::put($folder.'/'.$id.'.'.$file->getClientOriginalExtension(), File::get($file));
		$model->save();
		return (object)['success'=>true, 'file'=>$model];
	}

	public function getImageById($id){
		$image = HeaderImageModel::findOrFail($id);
    	$folder = config('services.headerimage.path');
    	return response(Storage::get($folder.'/'.$image->id.'.'.$image->extension), 200)->header('Content-Type', $image->mime);
	}
}