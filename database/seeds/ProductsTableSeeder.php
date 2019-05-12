<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = [
            [
                'name' => "Удлинитель У1",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 21,
                'price' => 270.00,
                'image' => 'https://items.s1.citilink.ru/828018_v01_b.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Удлинитель У2",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 400,
                'price' => 606.00,
                'image' => 'https://cdn1.ozone.ru/multimedia/c1200/1005735226.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Удлинитель У3",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 37,
                'price' => 486.00,
                'image' => 'https://cdn1.ozone.ru/multimedia/c1200/1026133649.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Удлинитель У42-С',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 10,
                'price' => 4482.10,
                'image' => 'https://ekfgroup.com/350x350/uploads/products/70AD246860C1C4AB9DFA92AF46390D14.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ]
        ];

        DB::table('products')->insert($products);
    }
}
