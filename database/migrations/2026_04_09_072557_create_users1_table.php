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
        Schema::create('users1', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->comment('my comment');
            $table->integer('age')->nullable()->unsigned();
            $table->integer('salary')->default('0');
            $table->datetime('create_at');
            $table->datetime('update_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users1');
    }
};
