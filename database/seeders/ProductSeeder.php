<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                "price"=>"250",
                "description"=>"a smartphone with 8gb ram and much more features",
                "category"=>"mobile",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREcvxSIhCKf9wt4yQYGyoxkpzw18oRJ3xOIw&usqp=CAU",
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"399",
                "description"=>"a smarttv with much more features",
                "category"=>"tv",
                "gallery"=>"https://static.digit.in/default/514997f36523c8adf3cb55a2d5f552a58b5bbabb.jpeg?tr=w-1200",
            ],
            [
                'name'=>'Sony Tv',
                "price"=>"489",
                "description"=>"a tv with much more features",
                "category"=>"tv",
                "gallery"=>"https://m.media-amazon.com/images/I/81zeKI1IG9L._SL1500_.jpg",
            ],
            [
                'name'=>'Godrej Fridge',
                "price"=>"179",
                "description"=>"a fridge with advanced cooling and freezing system in class",
                "category"=>"fridge",
                "gallery"=>"https://m.media-amazon.com/images/I/71-XsJoSe1L._SL1500_.jpg",
            ],
        ]);
    }
}
