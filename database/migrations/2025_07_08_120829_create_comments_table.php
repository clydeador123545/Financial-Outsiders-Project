<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('blogpost_id');

            $table->text('description');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('blogpost_id')
                  ->references('blogpost_id')
                  ->on('blogposts')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
