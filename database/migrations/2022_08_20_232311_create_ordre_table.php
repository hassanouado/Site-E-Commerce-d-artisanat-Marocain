<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordre', function (Blueprint $table) {
            $table->id();
            $table->date('date_cmd');
            $table->string('address');
            $table->text('desc_cmd');
            $table->integer('livraison_id');
            $table->integer('user_id');
            $table->string('status_cmd');
            $table->string('payment_method');
            $table->string('payment_status');
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
        Schema::dropIfExists('ordre');
    }
}
