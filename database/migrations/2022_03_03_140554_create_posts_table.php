<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 5000)->nullable()->default(null);
            $table->text('short_description')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->tinyInteger('status')->default(0)->comment('0=Unavailable,1=Available,2=Preview');
            $table->integer('views')->default(0)->comment('So luong view');
            $table->tinyInteger('options')->default(0)->comment('1=Home,2=New');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories'); //->onDelete('cascade'); // tham chiếu tới cột id tại bảng categories
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
        Schema::dropIfExists('posts');
    }
}