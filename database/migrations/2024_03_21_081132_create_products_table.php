<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('price')->nullable();
            $table->string('old_price')->nullable();
            $table->string('discount')->nullable();
            $table->integer('stock')->default(0);
            $table->string('sku')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('star')->nullable();
            $table->text('video')->nullable();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->softDeletes();
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
};