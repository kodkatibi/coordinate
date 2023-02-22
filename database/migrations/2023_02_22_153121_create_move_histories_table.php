<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('move_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id');
            $table->integer('x_position')->default(0);
            $table->integer('y_position')->default(0);
            $table->integer('z_position')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('move_histories');
    }
};
