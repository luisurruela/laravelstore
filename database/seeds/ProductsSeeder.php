<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'          =>  'Red T-shirt',
            'slug'          =>  'red-t-shirt',
            'description'   =>  'Incredible confortable t-shirt made of cotton in red.',
            'price'         =>  4.99,
            'status'        =>  true
        ]);

        DB::table('products')->insert([
            'name'          =>  'Blue T-shirt',
            'slug'          =>  'blue-t-shirt',
            'description'   =>  'Incredible confortable t-shirt made of cotton in blue.',
            'price'         =>  4.99,
            'status'        =>  true
        ]);

        DB::table('products')->insert([
            'name'          =>  'Pink T-shirt',
            'slug'          =>  'pink-t-shirt',
            'description'   =>  'Incredible confortable t-shirt made of cotton in pink.',
            'price'         =>  4.99,
            'status'        =>  true
        ]);

        DB::table('products')->insert([
            'name'          =>  'Orange T-shirt',
            'slug'          =>  'orange-t-shirt',
            'description'   =>  'Incredible confortable t-shirt made of cotton in orange.',
            'price'         =>  4.99,
            'status'        =>  true
        ]);

        DB::table('products')->insert([
            'name'          =>  'Black T-shirt',
            'slug'          =>  'black-t-shirt',
            'description'   =>  'Incredible confortable t-shirt made of cotton in black.',
            'price'         =>  4.99,
            'status'        =>  true
        ]);

        DB::table('products')->insert([
            'name'          =>  'White T-shirt',
            'slug'          =>  'white-t-shirt',
            'description'   =>  'Incredible confortable t-shirt made of cotton in white.',
            'price'         =>  4.99,
            'status'        =>  true
        ]);
    }
}
