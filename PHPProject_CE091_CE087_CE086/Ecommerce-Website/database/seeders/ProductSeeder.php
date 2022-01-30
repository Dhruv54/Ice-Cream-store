<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            "name"=>"Vadilal FLINGO Cones",
            "price"=>"50",
            "category"=>"Cones",
            "gallery"=>"/images/35th.png",
        ]);
    }
}

