<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('orders')->insert([
        	'user_id' => 1,
        	'menu_id' => 1,
        	'quantity' => 3,
        	'address' => '東京都港区六本木０−０−０',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);

        DB::table('orders')->insert([
            'user_id' => 1,
        	'menu_id' => 10,
        	'quantity' => 100,
        	'address' => '東京都中央区銀座０−０−０',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);

        DB::table('orders')->insert([
            'user_id' => 1,
        	'menu_id' => 5,
        	'quantity' => 100,
        	'address' => '東京都江東区木場０−０−０',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
    }
}
