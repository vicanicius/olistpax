<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::get(env('APP_URL_IBGE_STATES'));
        
        foreach ($response->json() as $key => $value){
            DB::table(State::TABLE_NAME)->insert([
                [
                    State::FILLABLE["name"] => $value['nome'],
                    State::FILLABLE["uf"] => $value['sigla'],
                ]
            ]);
        }
    }
}