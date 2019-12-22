<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartitemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'product_id' => 1,
            'cart_id' => 2,
            'quantity' => 1,
            'size' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('cartitems')->insert($param);

        $param = [
            'product_id' => 2,
            'cart_id' => 2,
            'quantity' => 1,
            'size' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('cartitems')->insert($param);

        $param = [
            'product_id' => 3,
            'cart_id' => 1,
            'quantity' => 2,
            'size' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('cartitems')->insert($param);

        $param = [
            'product_id' => 4,
            'cart_id' => 3,
            'quantity' => 1,
            'size' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('cartitems')->insert($param);
    }
}
