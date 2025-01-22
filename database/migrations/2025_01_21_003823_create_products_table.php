<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255);
            $table->string("description", 500)->default("Without description");
            $table->string("category", 255);
            $table->string("image")->default("https://www.edelar.com.ar/static/theme/images/sin_imagen.jpg");
            $table->integer("price")->default(0);
            $table->boolean("is_active")->default(true);
            $table->integer("discount")->default(0);
            $table->json("colors")->default(new Expression('(JSON_ARRAY())'));
            $table->json("sizes")->default(new Expression('(JSON_ARRAY())'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
