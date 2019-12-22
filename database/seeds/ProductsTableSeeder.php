<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'ダークグレースーツ',
            'color' => 'gray',
            'size' => 1,
            'category' => 'スーツ',
            'price' => 20000,
            'img_url' => 'images/test.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);
        
        $param = [
            'name' => 'ネイビースーツ',
            'color' => 'gray',
            'size' => 1,
            'category' => 'スーツ',
            'price' => 30000,
            'img_url' => 'images/naivy.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        DB::table('products')->insert($param);

        $param = [
            'name' => 'グレースーツ',
            'color' => 'gray',
            'size' => 2,
            'category' => 'スーツ',
            'price' => 25000,
            'img_url' => 'images/gray.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'ブラックスーツ',
            'color' => 'black',
            'size' => 3,
            'category' => 'スーツ',
            'price' => 50000,
            'img_url' => 'images/black_suit.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'グレーネクタイ',
            'color' => 'black',
            'size' => 1,
            'category' => 'ネクタイ',
            'price' => 5500,
            'img_url' => 'images/gray_tie.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'カラフルネクタイ',
            'color' => 'black',
            'size' => 1,
            'category' => 'ネクタイ',
            'price' => 20000,
            'img_url' => 'images/colordul_tie.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'グレーネクタイ2',
            'color' => 'black',
            'size' => 1,
            'category' => 'ネクタイ',
            'price' => 5500,
            'img_url' => 'images/gray_tie.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'カラフルネクタイ2',
            'color' => 'black',
            'size' => 1,
            'category' => 'ネクタイ',
            'price' => 20000,
            'img_url' => 'images/colordul_tie.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

    }
}
