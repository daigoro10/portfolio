<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];    
        DB::table('carts')->insert($param);

        $param = [
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];    
        DB::table('carts')->insert($param);

        $param = [
            'user_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];    
        DB::table('carts')->insert($param);
    }
}
