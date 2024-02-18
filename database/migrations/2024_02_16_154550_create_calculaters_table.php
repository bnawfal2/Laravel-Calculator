<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calculaters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('num1')->nullable();;
            $table->string('oper');
            $table->integer('num2')->nullable();;
            $table->integer('result');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calculaters');
    }
};
