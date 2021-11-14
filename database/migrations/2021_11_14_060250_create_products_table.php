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
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
            $table->unsignedBigInteger('seller_id')->comment('It means product owner');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->unsignedBigInteger('child_category_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('product_type_id');
            $table->enum('type',['in house', 'seller'])->default('seller');
            $table->float('previous_price',11,2);
            $table->float('current_price',11,2);
            $table->float('discount',11,2);
            $table->string('thumbnail')->nullable();
            $table->string('description')->nullable();
            $table->string('specification')->nullable();
            $table->string('return_policy')->nullable();
            $table->tinyInteger('publish')->default('0')->comment('0=publish,1=Not publish');
            $table->tinyInteger('approve')->default('0')->comment('0=approve,1=Not Approve');
            $table->tinyInteger('flash_deal')->default('0')->comment('0=flash deal,1=Not Flash deal');
            $table->tinyInteger('featured')->default('0')->comment('0=featured,1=Not Featured');
            $table->tinyInteger('best_sale')->default('0')->comment('0=best sale,1=Not Best sale');
            $table->tinyInteger('hot')->default('0')->comment('0=hot,1=Not Hot');
            $table->tinyInteger('top_sale')->default('0')->comment('0=top sale,1=Not top sale');
            $table->tinyInteger('big_save')->default('0')->comment('0=big save,1=Not Big save');
            $table->tinyInteger('new_arrival')->default('0')->comment('0=new arrival,1=Not New arrival');
            $table->tinyInteger('trending')->default('0')->comment('0=trending,1=Not Trending');
            $table->timestamps();

            // propagration contrains
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->foreign('child_category_id')->references('id')->on('child_categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('product_type_id')->references('id')->on('product_types')->onDelete('cascade');
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
