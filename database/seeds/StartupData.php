<?php

use Illuminate\Database\Seeder;

class StartupData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header_images')->insert([
        		[
					'id' => 'k84Yb4cAYC938bpt0qitRGldyft53O0BTfczwjBvHv0MKM9RnsErD2xN1GsR',
					'name' => 'tumblr_nspxotE2kA1uceowso1_1280.jpg',
					'extension' => 'jpg',
					'mime' => 'image/jpeg',
					'size' => 0.36,
					'width' => 1280,
					'height' => 853,
					'title'=>'Title #1',
					'text'=>'Text for title1',
					'created_at'=>Carbon\Carbon::now(),
					'updated_at'=>Carbon\Carbon::now(),
        		],
        		[
					'id' => 'q3oNwo5sOjuWbJ6U8vzcDvylaV5am8B7XKDhqUu3i5AfUp59tPmw1cwCttES',
					'name' => 'rainbow_clouds_by_tectix-d6olksn.jpg',
					'extension' => 'jpg',
					'mime' => 'image/jpeg',
					'size' => 1.43,
					'width' => 1920,
					'height' => 1200,
					'title'=>'Title #2',
					'text'=>'Text for title2',
					'created_at'=>Carbon\Carbon::now(),
					'updated_at'=>Carbon\Carbon::now(),
        		],
        		[
					'id' => 'qlplbPd1DMoehUgL02wC2tBdnB8xK8nN4ej22Fty3ycqT77C0wAPAbVUnLWc',
					'name' => 'tumblr_lzc9e3fSJF1roluw4o1_1280.jpg',
					'extension' => 'jpg',
					'mime' => 'image/jpeg',
					'size' => 0.48,
					'width' => 1280,
					'height' => 960,
					'title'=>'Title #3',
					'text'=>'Text for title3',
					'created_at'=>Carbon\Carbon::now(),
					'updated_at'=>Carbon\Carbon::now(),
        		],        		        		
        		[
					'id' => 'rigpmUiwgG9D5alUIo3vqLzRfOlFRZeXDz4DdJlj9mEH7Xi7TpxEuLuVI6hx',
					'name' => 'ocean-water-tumblr-amazing-decoration-6.jpg',
					'extension' => 'jpg',
					'mime' => 'image/jpeg',
					'size' => 1.21,
					'width' => 2560,
					'height' => 1600,
					'title'=>'Title #4',
					'text'=>'Text for title4',
					'created_at'=>Carbon\Carbon::now(),
					'updated_at'=>Carbon\Carbon::now(),
        		],
        		[
					'id' => 'wIoZMm5ODyFIuRWo2VloImPjgl1cdfg6umRZvIzIh9Jsho7Xavk1jC8otIdi',
					'name' => 'tumblr_nb2j1zggdO1sifu07o3_1280.jpg',
					'extension' => 'jpg',
					'mime' => 'image/jpeg',
					'size' => 1.32,
					'width' => 1280,
					'height' => 853,
					'title'=>'Title #5',
					'text'=>'Text for title5',
					'created_at'=>Carbon\Carbon::now(),
					'updated_at'=>Carbon\Carbon::now(),
        		],        		        		
        	]);
    }
}
