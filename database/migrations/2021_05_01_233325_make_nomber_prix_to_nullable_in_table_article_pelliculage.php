<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeNomberPrixToNullableInTableArticlePelliculage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article_pelliculage', function (Blueprint $table) {
            $table->integer('nomber')->nullable()->change();
            $table->decimal('prix', 10, 2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_pelliculage', function (Blueprint $table) {
            $table->integer('nomber');
            $table->decimal('prix', 10, 2);
        });
    }
}
