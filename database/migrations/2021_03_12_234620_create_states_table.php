<?php

use App\Models\State;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(State::TABLE_NAME, function (Blueprint $table) {
            $table->increments(State::PRIMARY_KEY);
            
            $table->string(State::FILLABLE['name']);

            $table->string(State::FILLABLE['uf']);

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(State::TABLE_NAME);
    }
}
