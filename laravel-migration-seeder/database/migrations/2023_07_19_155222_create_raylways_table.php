<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
*/
public function up()
{
Schema::create('raylways', function (Blueprint $table) {
    $table->id();
    $table->string('company', 64);
    $table->string('start_station', 64);
    $table->string('end_station', 64);
    $table->dateTime('departure_time');
    $table->dateTime('arrival_time');
    $table->string('train_code', 10) ->unique();
    $table->unsignedInteger('carriage_count');
    $table->boolean('on_time') -> default(true);
    $table->boolean('cancelled') -> default(false);
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
        Schema::dropIfExists('raylways');
    }
};
