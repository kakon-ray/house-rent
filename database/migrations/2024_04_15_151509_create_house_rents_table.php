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
        Schema::create('house_rents', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('title')->nullable();
            $table->string('status')->default(0);
            $table->string('catagory')->nullable();
            $table->string('amount')->nullable();
            $table->string('number')->nullable();
            $table->string('rent_month')->nullable();
            $table->string('house_location')->nullable();
            $table->string('size')->nullable();
            $table->string('room')->nullable();
            $table->string('bath_room')->nullable();
            $table->string('kitchen_room')->nullable();
            $table->string('img')->nullable();
            $table->text('desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_rents');
    }
};
