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
        Schema::create('audit_logins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('session_name')->nullable();
            $table->string('ip')->nullable();
            $table->string('browser')->nullable();
            $table->string('agent')->nullable();
            $table->dateTime('login_at')->nullable();
            $table->dateTime('logout_at')->nullable();
            $table->boolean('login_successfully')->default(false);
            $table->json('location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_logins');
    }
};
