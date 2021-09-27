<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\Product::class, 10)
        Product::factory()->count(10)->create()
            ->create()->each(function ($p) {
                $p->addMediaFromUrl('https://source.unsplash.com/collection/787410/800x487')
                    ->toMediaCollection('products')
                ;
            })
        ;
    }
}
