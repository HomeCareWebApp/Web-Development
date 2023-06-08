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
        Schema::create('technicians', function (Blueprint $table) {
            $table->string('technicianId')->primary();
            $table->string('name',50);
            $table->integer('age');
            $table->string('email',50);
            $table->string('password');
            $table->string('category',50);
            $table->string('experience',50);
            $table->string('location',50);
            $table->string('profilePicture',255);
            $table->string('phone',15);
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
        Schema::dropIfExists('technician');
    }
};
