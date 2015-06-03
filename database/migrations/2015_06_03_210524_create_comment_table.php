<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            /**
             * Utworzenie tabeli 'comments'. Powinna zawierać kolumny:
             * - id (primary key, int(10))
             * - id_post (int(10))
             * - comment_content (text)
             *
             * 'id_post' powinno być kluczem obcym powiązanym z tabelą 'posts'.
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
         * Usunięcie tabeli 'comments'
         */
    }

}
