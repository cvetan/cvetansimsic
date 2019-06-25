<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_translations', function (Blueprint $table) {
            $table->unsignedBigInteger('page_id');
            $table->string('language');
            $table->string('name')->nullable();
            $table->string('slug');
            $table->text('content')->nullable();
            $table->string('title_tag')->nullable();
            $table->string('description_tag')->nullable();

            $table->foreign('page_id')
                ->references('id')
                ->on('pages');

            $table->primary(['page_id', 'language']);

            $table->unique(['language', 'slug']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_translations');
    }
}
