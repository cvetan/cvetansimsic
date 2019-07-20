<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('page_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('page_id');
            $table->string('locale')->index();
            $table->string('name');
            $table->string('slug');
            $table->text('content')->nullable();
            $table->string('title_tag')->nullable();
            $table->string('description_tag')->nullable();

            $table->unique(['page_id', 'locale']);
            $table->unique(['locale', 'slug']);

            $table->foreign('page_id')
                ->references('id')
                ->on('pages')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('page_translations');
    }
}
