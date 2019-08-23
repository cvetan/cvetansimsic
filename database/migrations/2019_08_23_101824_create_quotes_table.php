<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('quote_category_id');
            $table->string('author');
            $table->string('source');
            $table->text('content');
            $table->timestamps();

            $table->foreign('quote_category_id')
                ->references('id')->on('quote_categories')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}
