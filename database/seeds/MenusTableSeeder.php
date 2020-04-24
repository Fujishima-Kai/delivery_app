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
        	'name' => 'のり巻き',
        	'description' => '高級な海苔を使用',
        	'shop_id' => 1,
        	'image_url' => 'hoge/hoge',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'name' => '納豆巻き',
            'description' => '高級な納豆を使用',
            'shop_id' => 1,
            'image_url' => 'hoge/hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'name' => 'ガリ',
            'description' => '高級な生姜を使用',
            'shop_id' => 1,
            'image_url' => 'hoge/hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'name' => 'スタンダードカレー',
            'description' => '普通のカレー',
            'shop_id' => 2,
            'image_url' => 'hoge/hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'name' => 'スパイシーカレー',
            'description' => 'ピリ辛のカレー',
            'shop_id' => 2,
            'image_url' => 'hoge/hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'name' => 'ハバネロカレー',
            'description' => '激辛のカレー',
            'shop_id' => 2,
            'image_url' => 'hoge/hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'name' => 'マイルドカレー',
            'description' => 'まろやかなカレー',
            'shop_id' => 2,
            'image_url' => 'hoge/hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'name' => 'ラーメン',
            'description' => '普通のラーメン',
            'shop_id' => 3,
            'image_url' => 'hoge/hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'name' => '餃子',
            'description' => '普通の餃子',
            'shop_id' => 3,
            'image_url' => 'hoge/hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'name' => 'ラーメンセット',
            'description' => 'ラーメンと餃子のセット',
            'shop_id' => 3,
            'image_url' => 'hoge/hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'name' => 'メンマ',
            'description' => 'つけ合わせ',
            'shop_id' => 3,
            'image_url' => 'hoge/hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'name' => '黒毛和牛のステーキ',
            'description' => '高級なステーキ',
            'shop_id' => 4,
            'image_url' => 'hoge/hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'name' => 'サーロインステーキ',
            'description' => '食べ応え抜群のステーキ',
            'shop_id' => 4,
            'image_url' => 'hoge/hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([
            'name' => 'レディースステーキ',
            'description' => 'サーロインステーキの1/2のサイズ',
            'shop_id' => 4,
            'image_url' => 'hoge/hoge',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
