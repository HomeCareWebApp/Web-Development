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
        Schema::create('orders', function (Blueprint $table) {
            $table->string('orderId')->primary();
            $table->date('orderDate');
            $table->string('service',50);
            $table->text('description');
            $table->string('address');
            $table->timestamps();
            $table->float('rating',3,2);

            $table->string('technicianId');

            $table->foreign('technicianId')->references('technicianId')->on('technicians');

            $table->string('customerId');

            $table->foreign('customerId')->references('customerId')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
};
