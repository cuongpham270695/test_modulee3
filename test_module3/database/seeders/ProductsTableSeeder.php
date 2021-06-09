<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $product = new Product();
        $product->id = 1;
        $product->name = 'Cà phê Vy';
        $product->price = 200000;
        $product->image = '';
        $product->type_id = 1;
        $product->save();
    }
}
