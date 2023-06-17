<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigIncrements('id');
           
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('exp_id');
            $table->foreign('exp_id')->references('id')->on('nbr_exemplaires');
            
            $table->unsignedBigInteger('format_id');
            $table->foreign('format_id')->references('id')->on('formats');
            
            $table->unsignedBigInteger('couleur_id');
            $table->foreign('couleur_id')->references('id')->on('nbr_couleurs');
           
            $table->unsignedBigInteger('impression_id');
            $table->foreign('impression_id')->references('id')->on('impressions');
            
            $table->unsignedBigInteger('pelliculage_id');
            $table->foreign('pelliculage_id')->references('id')->on('pelliculages');
                    
            $table->unsignedBigInteger('papier_id');
            $table->foreign('papier_id')->references('id')->on('papiers');
           
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->references('id')->on('articles');
        
            $table->integer('qte');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
