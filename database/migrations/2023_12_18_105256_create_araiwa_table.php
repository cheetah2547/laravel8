<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAraiwaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('araiwa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('number')->nullable();
            $table->float('grade')->nullable();
            $table->string('subject')->nullable();
            $table->date('date')->nullable();
            $table->text('naenaw')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('araiwa');
    }
}
