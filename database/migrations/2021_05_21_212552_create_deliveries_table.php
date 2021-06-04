<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->text('idd')->nullable();
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->string('title')->nullable();
            $table->text('val')->nullable();
            $table->text('nam')->nullable();
            $table->decimal('regular_price');
            $table->text('currency');
            $table->text('price_id')->nullable();
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
        Schema::dropIfExists('deliveries');
    }
}
