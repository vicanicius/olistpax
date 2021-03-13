<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(ProductType::TABLE_NAME)->insert([
            [
                ProductType::PRIMARY_KEY => 1,
                ProductType::FILLABLE["type_name"] => "Limpeza"
            ],
            [
                ProductType::PRIMARY_KEY => 2,
                ProductType::FILLABLE["type_name"] => "Alimentação"
            ]
        ]);
    }
}