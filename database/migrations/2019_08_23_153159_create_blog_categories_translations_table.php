<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCategoriesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('blog_categories_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('blog_category_id');
            $table->string('locale')->index();
            $table->string('title');
            $table->string('slug');
            $table->string('title_tag')->nullable();
            $table->string('description_tag')->nullable();

            $table->unique(['blog_category_id', 'locale']);
            $table->unique(['locale', 'slug']);

            $table->foreign('blog_category_id')
                ->references('id')->on('blog_categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('blog_categories_translations');
    }
}
