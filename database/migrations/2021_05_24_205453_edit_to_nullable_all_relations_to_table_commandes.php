<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditToNullableAllRelationsToTableCommandes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commandes', function (Blueprint $table) {
            $table->unsignedBigInteger('exp_id')->nullable()->change();
            $table->unsignedBigInteger('format_id')->nullable()->change();
            $table->unsignedBigInteger('couleur_id')->nullable()->change();
            $table->unsignedBigInteger('impression_id')->nullable()->change();
            $table->unsignedBigInteger('pelliculage_id')->nullable()->change();
            $table->unsignedBigInteger('papier_id')->nullable()->change();
            $table->integer('qte')->default(1)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commandes', function (Blueprint $table) {
            $table->unsignedBigInteger('exp_id')->change();
            $table->unsignedBigInteger('format_id')->change();
            $table->unsignedBigInteger('couleur_id')->change();
            $table->unsignedBigInteger('impression_id')->change();
            $table->unsignedBigInteger('pelliculage_id')->change();
            $table->unsignedBigInteger('papier_id')->change();
            $table->integer('qte')->change();
        });
    }
}
