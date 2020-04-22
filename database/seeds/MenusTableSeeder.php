<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop = DB::table('shops')->first();

        DB::table('menus')->insert([
        	'name' => 'かっぱ巻き',
        	'description' => '高級なきゅうりを使用',
        	'shop_id' => 1,
        	'image_url' => 'hoge/hoge',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
    }
}
