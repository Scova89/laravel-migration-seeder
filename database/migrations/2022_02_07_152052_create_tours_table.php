<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->string("country", 100);
            $table->string("city", 100);
            $table->text("description")->nullable();
            $table->tinyInteger("people");
            $table->boolean("fly_included")->default(true);
            $table->float("price", 8, 2);
            $table->float("discount", 8, 2);
            $table->date('arrival');
            $table->date('departure');
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
        Schema::dropIfExists('tours');
    }
}
