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
        Schema::create('log_activity_logins', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('name');
            $table->enum('activity', ['login', 'logout']);
            $table->bigInteger('no_activity');
            $table->string('ip_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_activity_logins');
    }
};
