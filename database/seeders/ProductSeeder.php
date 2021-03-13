<?php

namespace Database\Seeders;

use App\Models\Product;
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
        DB::table(Product::TABLE_NAME)->insert([
            [
                Product::PRIMARY_KEY => 1,
                Product::FILLABLE["type"] => 1,
                Product::FILLABLE["name"] => 'Sabão em pó',
                Product::FILLABLE["quantity"] => 2
            ],
            [
                Product::PRIMARY_KEY => 2,
                Product::FILLABLE["type"] => 1,
                Product::FILLABLE["name"] => 'Sabão liquido',
                Product::FILLABLE["quantity"] => 5
            ]
        ]);
    }
}