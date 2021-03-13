<?php

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Product::TABLE_NAME, function (Blueprint $table) {
            $table->increments(Product::PRIMARY_KEY);

            $table->bigInteger(Product::FILLABLE['quantity']);

            $table->string(Product::FILLABLE['name']);

            $table->integer(ProductType::PRIMARY_KEY)->unsigned();
            $table->foreign(ProductType::PRIMARY_KEY)
                ->references(ProductType::PRIMARY_KEY)
                ->on(ProductType::TABLE_NAME);

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
        Schema::dropIfExists(Product::TABLE_NAME);
    }
}
