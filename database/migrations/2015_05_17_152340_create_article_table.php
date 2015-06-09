<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            /**
             * Utworzenie tabeli 'posts'. Powinna zawierać kolumny:
             * - id (primary key, int(10))
             * - title (varchar(255))
             * - post_content (text)
             */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /**
         * Usunięcie tabeli 'posts'
         */
    }

}
