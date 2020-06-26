<?php

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
        Schema::create('products', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name', 255)->charset('utf8mb4');
            $table->string('image', 255);
            $table->string('status', 100)->default('New')->charset('utf8mb4');
            $table->unsignedBigInteger('cate_id');
            $table->double('price', 255);
            $table->integer('quantity');
            $table->string('description', 5000)->default(null)->charset('utf8mb4');
            $table->string('design', 100)->default(null)->charset('utf8mb4');       
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');;
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
