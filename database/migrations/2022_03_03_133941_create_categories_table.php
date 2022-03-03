<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 5000)->nullable()->default(null)->comment('this is category name');
            $table->string('slug', 5000)->nullable()->default(null);
            $table->text('description')->nullable()->default(null)->comment('this is category description');
            $table->tinyInteger('status')->default(0)->comment('=0:Unavailable,=1: Available');
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
        Schema::dropIfExists('categories');
    }
}