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
        Schema::create('blogposts', function (Blueprint $table) {
            $table->id('blogpost_id');
            $table->string('title', 255);
            $table->string('slug')->unique();
            $table->text('content');
            $table->foreignId('author_id')->constrained('users', 'user_id')->onDelete('cascade');
            $table->timestamp('published_at')->nullable();
            $table->timestamps(); // includes created_at and updated_at
            $table->string('image_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogposts');
    }
};
