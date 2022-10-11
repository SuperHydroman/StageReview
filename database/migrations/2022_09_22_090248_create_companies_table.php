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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->tinyText('name');
            $table->tinyText('email');
            $table->tinyText('phone_number');
            $table->tinyText('slogan')->nullable();
            $table->string('description', 500)->nullable();
            $table->tinyText('city');
            $table->tinyText('street_name');
            $table->integer('house_number');
            $table->tinyText('zip_code');
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
        Schema::dropIfExists('companies');
    }
};
