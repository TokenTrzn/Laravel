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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['surf', 'windsurf', 'layak', 'atv', 'hot air ballon']);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->dateTime('datetime');
            $table->boolean('paid')->default(0);
            $table->text('notes')->nullable()->default(null);
            $table->integer('satisfaction')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
