<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->integer('prix');
            $table->longText('description');
            $table->longText('image');
            $table->integer('Q_produit');
            $table->integer('categorie_id');

            $table->foreign('categorie_id')->references('id')->on('category')->onDelete("cascade");
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
        Schema::dropIfExists('product');
    }
}
