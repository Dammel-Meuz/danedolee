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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ouvrier_id');
            $table->unsignedBigInteger('jod_id');
            $table->string('image')->nullable();
            $table->string('addres')->nullable();
            $table->string('region')->nullable();
            $table->string('experience')->nullable();
            $table->string('phone')->nullable();
            $table->foreign('ouvrier_id')->references('id')->on('ouvriers')->onDelete('cascade');
            $table->foreign('jod_id')->references('id')->on('jods')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
