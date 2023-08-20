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
        Schema::create('company_master', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->longText('address');
            $table->string('license');
            $table->string('pan_no');
            $table->string('gstin_no');
            $table->integer('contact_primary');
            $table->integer('contact_secondary');
            $table->string('email')->unique();
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
        Schema::dropIfExists('company_master');
    }
};
