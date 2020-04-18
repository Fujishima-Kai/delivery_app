<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$user = DB::table('users')->first();

        DB::table('shops')->insert([
        	'name' => '鮨　港屋',
        	'address' => '東京都港区六本木０−０−０',
        	'user_id' => $user->id,
        	'image_url' => 'hoge/hoge',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);

		DB::table('shops')->insert([
        	'name' => '日本橋カレー　J-CURRY',
        	'address' => '東京都中央区日本橋０−０−０',
        	'user_id' => $user->id,
        	'image_url' => 'hoge/hoge',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);



    }
}
