<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	
	public function run()
    {
        DB::table('products')->insert(
		[
		'name' => 'BMW X5',
		'description' => 'X5',
		'photo' => 'https://s.auto.drom.ru/i24222/c/photos/fullsize/bmw/x5/bmw_x5_816434.jpg',
		'price' => 99999
		]);


    }
}
