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
        Schema::create('item_master', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id');
            $table->foreignId('grade_id');
            $table->foreignId('type_id');
            $table->foreignId('heat_no_id');
            $table->string('size');
            $table->integer('bundle_per_piece');
            $table->integer('approximate_quantity');
            $table->integer('quantity_grand_total');
            $table->string('length');
            $table->float('usd');
            $table->float('exchange_price');
            $table->string('rupee_basic_rate');
            $table->float('twelve_percentage');
            $table->string('contract_no');
            $table->string('invoice');
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
        Schema::dropIfExists('item_master');
    }
};
