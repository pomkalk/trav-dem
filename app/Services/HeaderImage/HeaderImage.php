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

	}
}